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
                                            <th>Nama Terminal</th>
                                            <th>Lokasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data_terminal as $term) : ?>
                                            <tr>
                                                <td><?php echo $term->nama_terminal ?></td>
                                                <td><?php echo $term->lokasi ?></td>
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