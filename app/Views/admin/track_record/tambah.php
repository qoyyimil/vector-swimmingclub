<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm border-0 rounded-3">
            <div class="card-body p-4">
                <h3 class="fw-bold text-dark mb-4">Tambah Data Prestasi</h3>
                
                <form action="<?= base_url('admin/track-record/submittambah'); ?>" method="POST" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Prestasi / Penghargaan</label>
                        <input type="text" name="prestasi" class="form-control" placeholder="Contoh: Juara 1 Kategori 50m Gaya Bebas" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Nama Atlet / Tim</label>
                        <input type="text" name="nama_atlet" class="form-control" placeholder="Contoh: Fahmi / Tim Estafet Putra" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Nama Kejuaraan / Turnamen</label>
                        <input type="text" name="kejuaraan" class="form-control" placeholder="Contoh: Kejurda Renang Jawa Timur 2026" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">Foto Dokumentasi / Sertifikat</label>
                        <input type="file" name="foto" class="form-control" required>
                        <div class="form-text text-muted">Format: JPG/PNG. Maksimal 2MB.</div>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary fw-bold">Simpan Prestasi</button>
                        <a href="<?= base_url('admin/track-record/data'); ?>" class="btn btn-light">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>