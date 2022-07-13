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
                                            <th>Nama Jalan</th>
                                            <th>Deskripsi Lokasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data_parkir as $park) : ?>
                                            <tr>
                                                <td><?php echo $park->nama_jalan ?></td>
                                                <td><?php echo $park->lokasi ?></td>

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