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

                                            <th>Nama Stasiun</th>
                                            <th>Lokasi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data_stasiun as $sta) : ?>
                                            <tr>

                                                <td><?php echo $sta->nama_stasiun ?></td>
                                                <td><?php echo $sta->lokasi ?> </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>