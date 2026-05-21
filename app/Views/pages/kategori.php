<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container text-center mb-5">
    <h1 class="fw-bold text-primary">Pilihan Kategori Kelas Renang</h1>
    <p class="text-muted fs-5">Pilih paket program latihan yang paling sesuai dengan kebutuhan dan target kemampuanmu.
    </p>
    <hr class="w-25 mx-auto text-primary" style="height: 3px;">
</div>

<div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
    <?php if (!empty($daftar_kelas)): ?>
        <?php foreach ($daftar_kelas as $kelas): ?>
            <div class="col">
                <div class="card h-100 shadow-sm border-0 border-top border-primary border-4 rounded-3 text-center">
                    <div class="card-body p-4">
                        <h4 class="fw-bold text-dark mb-3"><?= esc($kelas['nama_kelas']); ?></h4>
                        <h2 class="fw-extrabold text-primary mb-4">
                            <h2 class="fw-extrabold text-primary mb-4">
                                <span class="fs-5 fw-normal text-secondary">Rp</span>
                                <?= number_format($kelas['harga'], 0, ',', '.'); ?>

                                <?php if (stripos($kelas['nama_kelas'], 'reguler') !== false): ?>
                                    <span class="fs-6 fw-normal text-muted">/anak</span>
                                <?php else: ?>
                                    <span class="fs-6 fw-normal text-muted">/bln</span>
                                <?php endif; ?>
                            </h2>
                        </h2>
                        <p class="card-text text-secondary mb-4 text-start px-3"><?= nl2br(esc($kelas['deskripsi'])); ?></p>
                    </div>
                    <div class="card-footer bg-white border-0 pb-4">
                        <a href="https://wa.me/628123456789" target="_blank"
                            class="btn btn-outline-primary w-100 fw-bold rounded-pill">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="col-12 text-center py-5">
            <div class="alert alert-info border-0 shadow-sm">
                <h5 class="fw-bold mb-0">Belum Ada Kategori Kelas yang Dibuka</h5>
            </div>
        </div>
    <?php endif; ?>
</div>
<?= $this->endSection(); ?>