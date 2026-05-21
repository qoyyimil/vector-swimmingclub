<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm border-0 rounded-3">
            <div class="card-body p-4">
                <h3 class="fw-bold text-dark mb-4">Tambah Kategori Kelas</h3>
                
                <form action="<?= base_url('admin/kategori/submittambah'); ?>" method="POST">
                    <?= csrf_field(); ?>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Nama Kelas</label>
                        <input type="text" name="nama_kelas" class="form-control" placeholder="Contoh: Kelas Pemula (Anak-Anak)" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Deskripsi Layanan & Fasilitas</label>
                        <textarea name="deskripsi" class="form-control" rows="4" placeholder="Contoh: 8x pertemuan seminggu, gratis kacamata renang..." required></textarea>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">Harga Bulanan (Rupiah)</label>
                        <input type="number" name="harga" class="form-control" placeholder="Contoh: 350000" required>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary fw-bold">Simpan Kategori</button>
                        <a href="<?= base_url('admin/kategori/data'); ?>" class="btn btn-light">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>