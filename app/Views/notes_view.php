<?= $this->extend('layout/main_layout') ?>
<?= $this->section('content') ?>

<div class="mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Home / Dashboard</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Notes</h5>
            <form action="/notes/add" method="post">
                <table class="table table-bordered text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Catatan</th>
                            <th>Ditulis oleh</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#</td>
                            <td><input type="text" name="isi_catatan" class="form-control" required></td>
                            <td>Saya, Stock 📝</td>
                            <td><button type="submit" class="btn btn-primary">Add Note</button></td>
                        </tr>

                        <?php foreach ($notes as $i => $note): ?>
                            <tr>
                                <td><?= $i + 1 ?></td>
                                <td><?= esc($note['isi_catatan']) ?></td>
                                <td><?= esc($note['ditulis_oleh']) ?></td>
                                <td>—</td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>