<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->
<!-- Mirrored from ableproadmin.com/pages/login-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jul 2024 04:21:18 GMT -->

<head>
    <title>Login | Ferti Agro</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Bravo" />
    <!-- [Favicon] icon -->
    <link rel="icon" href="<?= base_url() ?>public/assets/images/logo_fertiagro.svg" type="image/x-icon" />
    <!-- [Font] Family -->
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/fonts/inter/inter.css" id="main-font-link" />
    <!-- [phosphor Icons] https://phosphoricons.com/ -->
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/fonts/phosphor/duotone/style.css" />
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/fonts/tabler-icons.min.css" />
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/fonts/feather.css" />
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/fonts/fontawesome.css" />
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/fonts/material.css" />
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/css/style.css" id="main-style-link" />
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/css/style-preset.css" />
</head><!-- [Head] end --><!-- [Body] Start -->

<body data-pc-preset="preset-9" data-pc-sidebar-caption="true" data-pc-layout="vertical" data-pc-direction="ltr" data-pc-theme_contrast="" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
    <div class="page-loader">
        <div class="bar"></div>
    </div>
    <!-- [ Pre-loader ] End -->
    <div class="auth-main">
        <div class="auth-wrapper v1">
            <div class="auth-form">
                <div class="card my-5">
                    <div class="card-body">
                        <input type="hidden" id="url_base" value="<?= base_url() ?>">
                        <h4 class="text-center f-w-500 mb-3">Inicie sesión</h4>
                        <form id="formLogin">
                            <div id="alertLogin">
                        
                            </div>
                            
                            <div class="mb-3">
                                <input type="text" class="form-control" id="user" name="user" placeholder="Usuario" />
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" />
                            </div>
                            <div class="d-flex mt-1 justify-content-between align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input input-primary" type="checkbox" id="customCheckc1" checked="" />
                                    <label class="form-check-label text-muted" for="customCheckc1">¿Acuérdate de mí?</label>
                                </div>
                                
                            </div>
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary">Acceder</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end --><!-- Required Js -->
    <script src="<?= base_url() ?>public/assets/js/plugins/popper.min.js"></script>
    <script src="<?= base_url() ?>public/assets/js/plugins/simplebar.min.js"></script>
    <script src="<?= base_url() ?>public/assets/js/plugins/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>public/assets/js/fonts/custom-font.js"></script>
    <script src="<?= base_url() ?>public/assets/js/pcoded.js"></script>
    <script src="<?= base_url() ?>public/assets/js/plugins/feather.min.js"></script>

    <script src="<?= base_url() ?>public/js/login/login.js"></script>
</body>
<!-- [Body] end -->
<!-- Mirrored from ableproadmin.com/pages/login-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jul 2024 04:21:19 GMT -->

</html>