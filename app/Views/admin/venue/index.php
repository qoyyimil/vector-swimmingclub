<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold text-dark">Kelola Venue & Jadwal Latihan</h2>
    <a href="<?= base_url('admin/venue/tambah'); ?>" class="btn btn-primary fw-bold">+ Tambah Lokasi Baru</a>
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
                    <th>Nama Kolam Renang</th>
                    <th>Alamat</th>
                    <th>Jadwal Sesi Latihan</th>
                    <th style="width: 150px;" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($venue)) : ?>
                    <?php $no = 1; foreach ($venue as $v) : ?>
                        <tr>
                            <td class="fw-bold text-secondary"><?= $no++; ?></td>
                            <td class="fw-bold text-dark"><?= esc($v['nama_kolam']); ?></td>
                            <td class="text-muted"><small><?= esc($v['alamat']); ?></small></td>
                            <td>
                                <span class="badge bg-light text-primary border border-primary p-2 fw-normal">
                                    <?= esc($v['jadwal']); ?>
                                </span>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-outline-warning me-1">Edit</button>
                                <button class="btn btn-sm btn-outline-danger">Hapus</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="5" class="text-center py-4 text-muted">Belum ada lokasi latihan. Silakan tambah data baru.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection(); ?>