<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm border-0 rounded-3">
            <div class="card-body p-4">
                <h3 class="fw-bold text-dark mb-4">Tambah Lokasi Latihan</h3>
                
                <form action="<?= base_url('admin/venue/submittambah'); ?>" method="POST">
                    <?= csrf_field(); ?>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Nama Kolam Renang</label>
                        <input type="text" name="nama_kolam" class="form-control" placeholder="Contoh: Kolam Renang KONI" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Alamat Lengkap</label>
                        <textarea name="alamat" class="form-control" rows="3" placeholder="Masukkan alamat lengkap kolam renang..." required></textarea>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">Jadwal Sesi Latihan</label>
                        <textarea name="jadwal" class="form-control" rows="3" placeholder="Contoh:&#10;Selasa (16.00 - 18.00)&#10;Kamis (16.00 - 18.00)" required></textarea>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary fw-bold">Simpan Venue</button>
                        <a href="<?= base_url('admin/venue/data'); ?>" class="btn btn-light">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>