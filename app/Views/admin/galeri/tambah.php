<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm border-0 rounded-3">
            <div class="card-body p-4">
                <h3 class="fw-bold text-dark mb-4">Tambah Foto Galeri</h3>
                
                <!-- Wajib pakai enctype="multipart/form-data" agar file foto bisa terkirim -->
                <form action="<?= base_url('admin/galeri/submittambah'); ?>" method="POST" enctype="multipart/form-data">
                    <?= csrf_field(); ?> <!-- Pengaman bawaan CI4 -->

                    <div class="mb-3">
                        <label class="form-label fw-bold">Judul Dokumentasi</label>
                        <input type="text" name="judul" class="form-control" placeholder="Contoh: Latihan Fisik Atlet" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Deskripsi Singkat</label>
                        <textarea name="deskripsi" class="form-control" rows="3" placeholder="Ceritakan sedikit tentang foto ini..." required></textarea>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">Pilih Foto (JPG/PNG)</label>
                        <input type="file" name="foto" class="form-control" accept="image/*" required>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary fw-bold">Upload & Simpan Data</button>
                        <a href="<?= base_url('galeri'); ?>" class="btn btn-light">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>