<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="p-5 mb-5 bg-primary text-white rounded-3 shadow-sm">
    <div class="container-fluid py-4 text-center">
        <h1 class="display-4 fw-bold">Selamat Datang di Vector Swim</h1>
        <p class="fs-5 text-white-50">Tempat terbaik untuk belajar berenang dari nol hingga menjadi atlet berprestasi bersama pelatih profesional.</p>
        <a href="https://wa.me/628123456789" target="_blank" class="btn btn-light text-primary btn-lg fw-bold rounded-pill mt-3 px-4">Gabung Sekarang</a>
    </div>
</div>

<div class="my-5">
    <div class="text-center mb-4">
        <h2 class="fw-bold text-dark">Program Latihan Kami</h2>
        <p class="text-muted">Pilihan paket program kelas renang yang dirancang sesuai umur dan kemampuan.</p>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
        <?php foreach (array_slice($kategori, 0, 3) as $k) : ?>
            <div class="col">
                <div class="card h-100 shadow-sm border-0 border-top border-primary border-3 rounded-3">
                    <div class="card-body">
                        <h5 class="fw-bold text-dark mb-2"><?= esc($k['nama_kelas']); ?></h5>
                        <p class="text-primary fw-bold mb-3">
                            Rp <?= number_format($k['harga'], 0, ',', '.'); ?>
                            <small class="text-muted"><?= (stripos($k['nama_kelas'], 'reguler') !== false) ? '/anak' : '/bln'; ?></small>
                        </p>
                        <a href="<?= base_url('/kategori'); ?>" class="btn btn-sm btn-outline-primary rounded-pill">Lihat Detail</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<hr class="my-5 opacity-25">

<div class="my-5">
    <div class="text-center mb-4">
        <h2 class="fw-bold text-dark">Dokumentasi Kegiatan</h2>
        <p class="text-muted">Intip keseruan dan momen latihan rutin para atlet dan member Vector Swim.</p>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php if (!empty($galeri)) : ?>
            <?php foreach ($galeri as $g) : ?>
                <div class="col">
                    <div class="card h-100 shadow-sm border-0 rounded-3 overflow-hidden">
                        <img src="<?= base_url('uploads/galeri/' . $g['nama_file']); ?>" class="card-img-top" alt="Foto Kegiatan" style="height: 220px; object-fit: cover;">
                        <div class="card-body p-3">
                            <h6 class="fw-bold text-dark mb-1"><?= esc($g['judul']); ?></h6>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="col-12 text-center text-muted">Belum ada dokumentasi foto.</div>
        <?php endif; ?>
    </div>
    <div class="text-center mt-4">
        <a href="<?= base_url('/galeri'); ?>" class="btn btn-outline-secondary fw-bold rounded-pill">Lihat Semua Galeri ➡️</a>
    </div>
</div>
<?= $this->endSection(); ?>