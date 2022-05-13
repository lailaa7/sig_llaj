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
                                    <?php foreach ($data_halte as $halte) : ?>
                                        <tr>
                                            <td><?php echo $halte->lokasi ?> </td>
                                            <td><?php echo $halte->nama_jalan ?></td>
                                            <td><?php echo $halte->jumlah ?></td>
                                            <td><?php echo $halte->kondisi ?></td>
                                            <td><?php echo $halte->longitude ?></td>
                                            <td><?php echo $halte->latitude ?></td>
                                            <td>
                                                <?php echo anchor(
                                                    'admin/cctv_admin/detail_cctv/' . $halte->id_cctv,
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