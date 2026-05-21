<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container text-center mb-5">
    <h1 class="fw-bold text-primary">Track Record & Prestasi Atlet</h1>
    <p class="text-muted fs-5">Bukti komitmen Club Renang Vector dalam melahirkan perenang berbakat dan berprestasi di tingkat regional maupun nasional.</p>
    <hr class="w-25 mx-auto text-primary" style="height: 3px;">
</div>

<div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
    <?php if (!empty($daftar_prestasi)) : ?>
        <?php foreach ($daftar_prestasi as $p) : ?>
            <div class="col">
                <div class="card h-100 shadow-sm border-0 rounded-3 overflow-hidden">
                    <img src="<?= base_url('uploads/track_record/' . $p['foto']); ?>" class="card-img-top" alt="Foto Prestasi" style="height: 200px; object-fit: cover;">
                    
                    <div class="card-body p-4">
                        <span class="badge bg-warning text-dark mb-2 fw-bold">🏆 <?= esc($p['prestasi']); ?></span>
                        
                        <h5 class="fw-bold text-dark mb-1"><?= esc($p['nama_atlet']); ?></h5>
                        
                        <p class="text-muted small mb-0">📍 <?= esc($p['kejuaraan']); ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else : ?>
        <div class="col-12 text-center py-5">
            <div class="alert alert-info border-0 shadow-sm">
                <h5 class="fw-bold mb-0">Belum Ada Track Record Prestasi yang Dimasukkan</h5>
            </div>
        </div>
    <?php endif; ?>
</div>
<?= $this->endSection(); ?>