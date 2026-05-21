<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold text-dark">Kelola Track Record & Prestasi</h2>
    <a href="<?= base_url('admin/track-record/tambah'); ?>" class="btn btn-primary fw-bold">+ Tambah Prestasi Baru</a>
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
                    <th style="width: 100px;">Foto/Dokumentasi</th>
                    <th>Prestasi</th>
                    <th>Nama Atlet</th>
                    <th>Kejuaraan / Turnamen</th>
                    <th style="width: 150px;" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($records)) : ?>
                    <?php $no = 1; foreach ($records as $r) : ?>
                        <tr>
                            <td class="fw-bold text-secondary"><?= $no++; ?></td>
                            <td>
                                <img src="<?= base_url('uploads/track_record/' . $r['foto']); ?>" class="rounded shadow-sm" style="width: 70px; height: 50px; object-fit: cover;">
                            </td>
                            <td class="fw-bold text-dark"><?= esc($r['prestasi']); ?></td>
                            <td class="text-secondary"><?= esc($r['nama_atlet']); ?></td>
                            <td class="text-muted"><small><?= esc($r['kejuaraan']); ?></small></td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-outline-warning me-1">Edit</button>
                                <button class="btn btn-sm btn-outline-danger">Hapus</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="6" class="text-center py-4 text-muted">Belum ada data prestasi. Silakan tambah data baru.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection(); ?>