<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>LOGIN - SI LLAJ</title>
    <link href="<?php echo base_url() ?>assets/admin/css/style.css" rel="stylesheet">
</head>

<div class="login-form-bg h-100" style="background: #223a66;">

    <div class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-xl-8">
                <div class="form-input-content">
                    <div class="card login-form mb-0">
                        <div class="row justify-content-center">
                            <div class="col-md-5 d-flex align-items-center">
                                <div class="text-center">
                                    <a href=""><img class="" style="width:220px;" src="<?php echo base_url() ?>/assets/admin/images/dishub.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-5 py-5">

                                <a class="text-center">
                                    <h4>LOGIN</h4>
                                </a>

                                <form action="<?php echo base_url() . 'auth/proses_login' ?>" method="POST" enctype="multipart/form-data" class="mt-5 mb-5 login-input">
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                    <button name="login" class="btn login-form__btn submit w-100">Masuk</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>