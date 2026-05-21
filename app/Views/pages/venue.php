<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container text-center mb-5">
    <h1 class="fw-bold text-primary">Lokasi & Jadwal Latihan</h1>
    <p class="text-muted fs-5">Club Renang Vector mengadakan latihan rutin di beberapa kolam renang pilihan dengan
        fasilitas terbaik.</p>
    <hr class="w-25 mx-auto text-primary" style="height: 3px;">
</div>

<div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">
    <?php if (!empty($daftar_venue)): ?>
        <?php foreach ($daftar_venue as $v): ?>
            <div class="col">
                <div class="card h-100 shadow-sm border-0 rounded-3 overflow-hidden">
                    <div class="card-body p-4">

                        <h4 class="fw-bold mb-0 d-flex justify-content-between align-items-center w-100">
                            <a <?= urlencode($v['nama_kolam'] . ' ' . $v['alamat']); ?>"
                                target="_blank" class="text-dark text-decoration-none">
                                <?= esc($v['nama_kolam']); ?>
                            </a>
                            <a href="https://www.google.com/maps/search/?api=1&query=<?= urlencode($v['nama_kolam'] . ' ' . $v['alamat']); ?>"
                                target="_blank" class="fs-6 text-primary text-decoration-none fw-normal">
                                📍 (Buka Maps)
                            </a>
                        </h4>

                        <hr class="text-muted opacity-25">

                        <h6 class="fw-bold text-secondary mb-1">Alamat Lokasi:</h6>
                        <p class="text-muted small mb-4"><?= nl2br(esc($v['alamat'])); ?></p>

                        <div class="bg-light rounded-3 p-3 border-start border-primary border-4">
                            <h6 class="fw-bold text-dark mb-2">📅 Jadwal Rutin:</h6>
                            <p class="text-primary fw-bold mb-0 small" style="line-height: 1.6;">
                                <?= nl2br(esc($v['jadwal'])); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="col-12 text-center py-5">
            <div class="alert alert-info border-0 shadow-sm">
                <h5 class="fw-bold mb-0">Belum Ada Jadwal & Lokasi yang Ditentukan</h5>
            </div>
        </div>
    <?php endif; ?>
</div>

<style>
    .text-primary-hover:hover {
        color: #0d6efd !important;
        text-decoration: underline !important;
    }
</style>
<?= $this->endSection(); ?>