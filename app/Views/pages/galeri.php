<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container text-center mb-5">
    <h1 class="fw-bold text-primary">Galeri & Track Record</h1>
    <p class="text-muted fs-5">Dokumentasi keseruan latihan dan rekam jejak prestasi para atlet Vector Swimming Club.</p>
    <hr class="w-25 mx-auto text-primary" style="height: 3px;">
</div>

<!-- GRID SYSTEM FOTO GALERI -->
<div class="row row-cols-1 row-cols-md-3 g-4">
    <?php if (!empty($foto_klub)) : ?>
        <?php foreach ($foto_klub as $foto) : ?>
            <div class="col">
                <div class="card h-100 shadow-sm border-0 rounded-3 overflow-hidden">
                    <!-- Sementara gambar placeholder dulu, nanti kalau fitur upload sudah jadi, arahkan ke folder public/uploads -->
                    <img src="<?= base_url('uploads/galeri/' . $foto['nama_file']); ?>" class="card-img-top" alt="<?= esc($foto['judul']); ?>" style="height: 240px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-dark mb-1"><?= esc($foto['judul']); ?></h5>
                        <p class="card-text text-secondary small mb-2"><?= esc($foto['deskripsi']); ?></p>
                        <div class="d-flex justify-content-between align-items-center mt-3 pt-2 border-top">
                            <span class="badge bg-light text-primary fw-normal"><?= date('d M Y', strtotime($foto['created_at'])); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else : ?>
        <!-- Tampilan jika database masih kosong kosong -->
        <div class="col-12 text-center py-5">
            <div class="alert alert-info border-0 shadow-sm py-4">
                <h5 class="fw-bold mb-2">Belum Ada Dokumentasi</h5>
                <p class="mb-0 text-muted">Admin belum mengunggah foto kegiatan atau track record terbaru.</p>
            </div>
        </div>
    <?php endif; ?>
</div>
<?= $this->endSection(); ?>