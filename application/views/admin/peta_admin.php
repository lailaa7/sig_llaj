<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Data LLAJ</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Data LLAJ</a></li>
        </ol>
    </div>
</div>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title text-center">
                        <h3>Peta Kota Madiun</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="basic-form mb-3">
                        <form action="" method="POST">
                            <div class="form-row">
                                <div class="col-3">
                                    <label class="col-form-label">Kategori</label>
                                    <select id="kategori" class="form-control input-rounded">
                                        <option selected="selected" value="0">Semua Kategori</option>
                                        <?php foreach ($kategori as $ktg) : ?>
                                            <option value="<?php echo $ktg->id_kategori ?>"><?php echo $ktg->nama_kategori ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    </div>
                            </div>
                        </form>
                    </div>

                    <div id="letak-maps"></div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var kategori = $('#kategori').val();
        $.ajax({
            url: "<?=base_url('admin/Peta_admin/get_kategori/')?>"+kategori,
            success: function (response) {
                $('#letak-maps').html(response);
            }
        });
    
        $('#kategori').on('change', function(){
            var kategori = $(this).val();
            $.ajax({
                url: "<?=base_url('admin/Peta_admin/get_kategori/')?>"+kategori,
                success: function (response) {
                    $('#letak-maps').html(response);
                }
            });
        })
    })
</script>