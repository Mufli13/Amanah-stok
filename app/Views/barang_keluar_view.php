<?= $this->extend('layout/main_layout') ?>
<?= $this->section('content') ?>

<div class="mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('dashboard') ?>">Dashboard</a></li>
            <li class="breadcrumb-item active">Home / Barang Keluar</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="card-title">Barang Keluar</h5>
                <a href="<?= site_url('barangkeluar/tambah') ?>" class="btn btn-primary">Tambah</a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered text-center table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Barang</th>
                            <th>Ukuran</th>
                            <th>Jumlah</th>
                            <th>Penerima</th>
                            <th>Keterangan</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($barang_keluar)): ?>
                            <?php $no = 1; foreach ($barang_keluar as $row): ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= esc($row->tanggal) ?></td>
                                    <td><?= esc($row->barang) ?></td>
                                    <td><?= esc($row->ukuran) ?></td>
                                    <td><?= esc($row->jumlah) ?></td>
                                    <td><?= esc($row->penerima) ?></td>
                                    <td><?= esc($row->keterangan) ?></td>
                                    <td>
                                        <a href="<?= site_url('barangkeluar/delete/'.$row->id) ?>"
                                           onclick="return confirm('Yakin ingin menghapus data ini?')"
                                           class="btn btn-sm btn-danger">
                                           Hapus
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="8" class="text-muted">No data available in table</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-between mt-3">
                <a href="<?= site_url('barangkeluar/export') ?>" class="btn btn-info">Export Data</a>
                <nav>
                    <ul class="pagination pagination-sm mb-0">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
