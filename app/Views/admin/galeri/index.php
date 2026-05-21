<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold text-dark">Dashboard Admin: Kelola Galeri</h2>
    <a href="<?= base_url('admin/galeri/tambah'); ?>" class="btn btn-primary fw-bold">+ Tambah Foto Baru</a>
</div>

<!-- Alert Notifikasi Sukses -->
<?php if (session()->getFlashdata('success')) : ?>
    <div class="alert alert-success border-0 shadow-sm mb-4">
        <?= session()->getFlashdata('success'); ?>
    </div>
<?php endif; ?>

<!-- Tabel List Data untuk Admin -->
<div class="card shadow-sm border-0 rounded-3 overflow-hidden">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-primary text-white">
                <tr>
                    <th style="width: 80px;">No</th>
                    <th style="width: 150px;">Foto</th>
                    <th>Judul Dokumentasi</th>
                    <th>Deskripsi</th>
                    <th style="width: 150px;" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($galeri)) : ?>
                    <?php $no = 1; foreach ($galeri as $g) : ?>
                        <tr>
                            <td class="fw-bold text-secondary"><?= $no++; ?></td>
                            <td>
                                <img src="<?= base_url('uploads/galeri/' . $g['nama_file']); ?>" class="rounded shadow-sm" style="width: 80px; height: 60px; object-fit: cover;">
                            </td>
                            <td class="fw-bold text-dark"><?= esc($g['judul']); ?></td>
                            <td class="text-muted"><small><?= esc($g['deskripsi']); ?></small></td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-outline-warning me-1">Edit</button>
                                <button class="btn btn-sm btn-outline-danger">Hapus</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="5" class="text-center py-4 text-muted">Belum ada data galeri. Silakan tambah data baru.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection(); ?>