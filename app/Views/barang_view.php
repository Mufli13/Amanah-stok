<?= $this->extend('layout/main_layout') ?>
<?= $this->section('content') ?>

<div class="mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('dashboard') ?>">Dashboard</a></li>
            <li class="breadcrumb-item active">Home / Daftar Barang</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="card-title">Daftar Barang</h5>
                <a href="<?= site_url('daftarbarang/tambah') ?>" class="btn btn-primary">Tambah</a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered text-center table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Jenis</th>
                            <th>Merk</th>
                            <th>Ukuran</th>
                            <th>Stock</th>
                            <th>Satuan</th>
                            <th>Lokasi</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($daftar_barang)): ?>
                            <?php $no = 1;
                            foreach ($daftar_barang as $row): ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= esc($row['nama_barang']) ?></td>
                                    <td><?= esc($row['jenis']) ?></td>
                                    <td><?= esc($row['merk']) ?></td>
                                    <td><?= esc($row['ukuran']) ?></td>
                                    <td><?= esc($row['stock']) ?></td>
                                    <td><?= esc($row['satuan']) ?></td>
                                    <td><?= esc($row['lokasi']) ?></td>
                                    <td>
                                        <a href="<?= site_url('daftarbarang/hapus/' . $row['id']) ?>"
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