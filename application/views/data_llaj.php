<div class="container-fluid">
    <div class="content-body">
        <section class="section doctor-single">
            <div class="card">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered verticle-middle zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>Kategori</th>
                                            <th>Nama Jalan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data as $dt) : ?>
                                            <tr>
                                                <td><?php echo $dt['nama_kategori'] ?> </td>
                                                <td><?php echo $dt['nama_jalan'] ?></td>
                                                <td>
                                                    <?php echo anchor(
                                                        'Dashboard/Detail/' . $dt['id_data'],
                                                        '<div class="btn btn-circle btn-info btn-small"><i class="fas fa-eye"></i></div>'
                                                    ) ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
</div>