  <div class="content-body">
      <div class="col-lg-12 mt-3">
          <h4 class="card-title">Tambah Data CCTV</h4>
          <div class="card">
              <div class="card-body">
                  <div class="form-validation">
                      <form action="<?php echo base_url() . 'admin/tambah_cctv/tambah_aksi' ?>" method="POST" enctype="multipart/form-data">
                          <div class="row">
                              <div class="col-lg-6">
                                  <div class="form-group">
                                      <label class="control-label">ID Data</label>
                                      <input type="text" name="id_cctv" class="form-control" value="<?= $no_urut ?>" readonly>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-lg-6">
                                  <div class="form-group">
                                      <label class="control-label">Nama Jalan</label>
                                      <input type="text" name="nama_jalan" class="form-control" placeholder="">

                                      <div class="text-danger">
                                          <?php echo form_error('nama_jalan'); ?>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <div class="form-group">
                                      <label class="control-label">Simpang</label>
                                      <input type="text" name="lokasi" class="form-control" placeholder=" ">

                                      <div class="text-danger">
                                          <?php echo form_error('lokasi'); ?>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <div class="form-group">
                                      <label class="control-label">Jumlah</label>
                                      <input type="number" name="jumlah" class="form-control" placeholder="">

                                      <div class="text-danger">
                                          <?php echo form_error('jumlah'); ?>
                                      </div>
                                  </div>

                              </div>
                              <div class="col-lg-6">
                                  <div class="form-group">
                                      <label class="control-label">Latitude</label>
                                      <input type="number" id="latitude" name="latitude" class="form-control" placeholder="" readonly>

                                      <div class="text-danger">
                                          <?php echo form_error('latitude'); ?>
                                      </div>
                                  </div>

                              </div>
                              <div class="col-lg-6">
                                  <div class="form-group">
                                      <label class="control-label">Longitude</label>
                                      <input type="number" id="longitude" name="longitude" class="form-control" placeholder="" readonly>

                                      <div class="text-danger">
                                          <?php echo form_error('longitude'); ?>
                                      </div>
                                  </div>

                              </div>
                          </div>
                          <div class="form-group row">
                              <div class="col-lg-12 text-right">
                                  <button type="submit" class="btn btn-primary">Simpan</button>
                              </div>
                          </div>

                      </form>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-lg-12 mr-3">
          <div class="card">
              <div class="card-header">
                  <!-- <h4 class="card-title">Leaflet Quick Start Guide</h4>
                    <p class="text-muted mb-0">Example of Leaflet map.</p> -->
                  <!--end card-header-->
                  <div class="card-body">
                      <div id="Leaf_default" class="" style="height: 400px"></div>
                  </div>
                  <!--end card-body-->
              </div>
              <!--end card-->
          </div> <!-- end col -->
      </div> <!-- end row -->
  </div>