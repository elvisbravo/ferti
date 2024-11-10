<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->
<!-- Mirrored from ableproadmin.com/demo/layout-horizontal.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jul 2024 04:19:52 GMT -->

<head>
    <title>Ferti | Empresas</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="BRAVO" />
    <!-- [Favicon] icon -->
    <link rel="icon" href="<?= base_url() ?>public/assets/images/favicon.svg" type="image/x-icon" />
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

<body data-pc-preset="preset-9" data-pc-sidebar-caption="true" data-pc-layout="horizontal" data-pc-direction="ltr" data-pc-theme_contrast="" data-pc-theme="light" data-pc-direction="ltr">
    <!-- [ Pre-loader ] start -->
    <div class="page-loader">
        <div class="bar"></div>
    </div>
    <!-- [ Pre-loader ] End --><!-- [ Sidebar Menu ] start -->
    <nav class="pc-sidebar">
        <div class="navbar-wrapper">
            <div class="m-header">
                <a href="#" class="b-brand text-primary">
                    <h1 class="text-primary">BIENVENIDO</h1>
                </a>
            </div>
            <div class="navbar-content" style="height: 0px">
                <div class="card pc-user-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img src="<?= base_url() ?>public/assets/images/user/avatar-1.jpg" alt="user-image" class="user-avtar wid-45 rounded-circle" />
                            </div>
                            <div class="flex-grow-1 ms-3 me-2">
                                <h6 class="mb-0">Jonh Smith</h6>
                                <small>Administrator</small>
                            </div>
                            <a class="btn btn-icon btn-link-secondary avtar" data-bs-toggle="collapse" href="#pc_sidebar_userlink"><svg class="pc-icon">
                                    <use xlink:href="#custom-sort-outline"></use>
                                </svg></a>
                        </div>
                        <div class="collapse pc-user-links" id="pc_sidebar_userlink">
                            <div class="pt-3">
                                <a href="#!"><i class="ti ti-user"></i> <span>My Account</span> </a><a href="#!"><i class="ti ti-settings"></i> <span>Settings</span> </a><a href="#!"><i class="ti ti-lock"></i> <span>Lock Screen</span> </a><a href="#!"><i class="ti ti-power"></i> <span>Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </nav>
    <!-- [ Sidebar Menu ] end --><!-- [ Header Topbar ] start -->
    <header class="pc-header">
        <div class="header-wrapper">
            <!-- [Mobile Media Block] start -->
            <div class="me-auto pc-mob-drp">
                <ul class="list-unstyled">
                    <!-- ======= Menu collapse Icon ===== -->
                    <li class="pc-h-item pc-sidebar-collapse">
                        <h1 class="text-primary">BIENVENIDO</h1>
                    </li>
                    <li class="pc-h-item pc-sidebar-popup">
                        <h1 class="text-primary">BIENVENIDO</h1>
                    </li>

                </ul>
            </div>
            <!-- [Mobile Media Block end] -->
            <div class="ms-auto">
                <ul class="list-unstyled">

                    <li class="dropdown pc-h-item header-user-profile">
                        <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" data-bs-auto-close="outside" aria-expanded="false"><img src="<?= base_url() ?>public/assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar" /></a>
                        <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                            <div class="dropdown-header d-flex align-items-center justify-content-between">
                                <h5 class="m-0">Profile</h5>
                            </div>
                            <div class="dropdown-body">
                                <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 225px)">
                                    <div class="d-flex mb-1">
                                        <div class="flex-shrink-0">
                                            <img src="<?= base_url() ?>public/assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar wid-35" />
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Carson Darrin 🖖</h6>
                                            <span>Administrador</span>
                                        </div>
                                    </div>

                                    <p class="text-span">Manage</p>
                                    <a href="#" class="dropdown-item"><span><svg class="pc-icon text-muted me-2">
                                                <use xlink:href="#custom-setting-outline"></use>
                                            </svg>
                                            <span>Settings</span>
                                        </span></a><a href="#" class="dropdown-item"><span><svg class="pc-icon text-muted me-2">
                                                <use xlink:href="#custom-share-bold"></use>
                                            </svg>
                                            <span>Share</span>
                                        </span></a><a href="#" class="dropdown-item"><span><svg class="pc-icon text-muted me-2">
                                                <use xlink:href="#custom-lock-outline"></use>
                                            </svg>
                                            <span>Change Password</span></span></a>
                                    <hr class="border-secondary border-opacity-50" />

                                    <hr class="border-secondary border-opacity-50" />
                                    <div class="d-grid mb-3">
                                        <button class="btn btn-primary">
                                            <svg class="pc-icon me-2">
                                                <use xlink:href="#custom-logout-1-outline"></use>
                                            </svg>Logout
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <!-- [ Header ] end --><!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Empresas</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="mb-0">Lista de Empresas</h5>
                                <!--<div>
                                    <button type="button" class="btn btn-primary" id="addEmpresa">Agregar Empresa</button>
                                </div>-->
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row" id="listaEmpresas">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal -->

    <div class="modal fade" id="modalEmpresa" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4" id="myLargeModalLabel">
                        Large Modal
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">...</div>
            </div>
        </div>
    </div>

    <!-- [ Main Content ] end -->
    <footer class="pc-footer">
        <div class="footer-wrapper container-fluid">
            <div class="row">
                <div class="col my-1">
                    <p class="m-0">
                        Able Pro &#9829; crafted by Team
                        <a href="https://themeforest.net/user/phoenixcoded" target="_blank">Phoenixcoded</a>
                    </p>
                </div>
                <div class="col-auto my-1">
                    <ul class="list-inline footer-link mb-0">
                        <li class="list-inline-item">
                            <a href="../index-2.html">Home</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://phoenixcoded.gitbook.io/able-pro/" target="_blank">Documentation</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://phoenixcoded.authordesk.app/" target="_blank">Support</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Required Js -->
    
    <script src="<?= base_url() ?>public/assets/js/plugins/popper.min.js"></script>
    <script src="<?= base_url() ?>public/assets/js/plugins/simplebar.min.js"></script>
    <script src="<?= base_url() ?>public/assets/js/plugins/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>public/assets/js/fonts/custom-font.js"></script>
    <script src="<?= base_url() ?>public/assets/js/pcoded.js"></script>
    <script src="<?= base_url() ?>public/assets/js/plugins/feather.min.js"></script>
    <script>
        //layout_change("light");
    </script>
    <script>
        change_box_container("false");
    </script>
    <script>
        layout_caption_change("true");
    </script>
    <script>
        layout_rtl_change("false");
    </script>
    <script>
        preset_change("preset-9");
    </script>
    <script>
        main_layout_change("horizontal");
    </script>

    <script>
        localStorage.setItem("layout", "horizontal");
    </script>

    <script src="<?= base_url() ?>public/js/empresa/empresa.js"></script>
</body>
<!-- [Body] end -->
<!-- Mirrored from ableproadmin.com/demo/layout-horizontal.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jul 2024 04:19:52 GMT -->

</html>