<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold text-dark">Kelola Kategori Kelas</h2>
    <a href="<?= base_url('admin/kategori/tambah'); ?>" class="btn btn-primary fw-bold">+ Tambah Kelas Baru</a>
</div>

<?php if (session()->getFlashdata('success')) : ?>
    <div class="alert alert-success border-0 shadow-sm mb-4">
        <?= session()->getFlashdata('success'); ?>
    </div>
<?php endif; ?>

<div class="card shadow-sm border-0 rounded-3 overflow-hidden">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-primary text-white">
                <tr>
                    <th style="width: 80px;">No</th>
                    <th>Nama Kelas</th>
                    <th>Deskripsi</th>
                    <th>Harga / Bulan</th>
                    <th style="width: 150px;" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($kategori)) : ?>
                    <?php $no = 1; foreach ($kategori as $k) : ?>
                        <tr>
                            <td class="fw-bold text-secondary"><?= $no++; ?></td>
                            <td class="fw-bold text-dark"><?= esc($k['nama_kelas']); ?></td>
                            <td class="text-muted"><small><?= esc($k['deskripsi']); ?></small></td>
                            <td class="text-primary fw-bold">Rp <?= number_format($k['harga'], 0, ',', '.'); ?></td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-outline-warning me-1">Edit</button>
                                <button class="btn btn-sm btn-outline-danger">Hapus</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="5" class="text-center py-4 text-muted">Belum ada kategori kelas. Silakan tambah data baru.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection(); ?>