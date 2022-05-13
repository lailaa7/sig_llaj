<div class="container-fluid">
    <div class="content-body">
        <section class="section doctor-single">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered verticle-middle zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Lokasi</th>
                                        <th>Nama Jalan</th>
                                        <th>Jumlah</th>
                                        <th>Kondisi</th>
                                        <th>Longitude</th>
                                        <th>Latitude</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data_stasiun as $sta) : ?>
                                        <tr>
                                            <td><?php echo $sta->lokasi ?> </td>
                                            <td><?php echo $sta->nama_jalan ?></td>
                                            <td><?php echo $halte->jumlah ?></td>
                                            <td><?php echo $sta->kondisi ?></td>
                                            <td><?php echo $sta->longitude ?></td>
                                            <td><?php echo $sta->latitude ?></td>
                                            <td>
                                                <?php echo anchor(
                                                    'admin/cctv_admin/detail_cctv/' . $sta->id_stasiun,
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
        </section>
    </div>
</div>