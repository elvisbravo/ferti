<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->
<!-- Mirrored from ableproadmin.com/other/sample-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jul 2024 04:21:23 GMT -->

<head>
    <title>Sample Page | Able Pro Dashboard Template</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Bravo" />
    <!-- [Favicon] icon -->
    <link rel="icon" href="<?= base_url() ?>public/assets/images/favicon.svg" type="image/x-icon" />

    <?= $this->renderSection('css') ?>

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
    <script src="<?= base_url() ?>public/assets/js/tech-stack.js"></script>
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/css/style-preset.css" />

</head><!-- [Head] end --><!-- [Body] Start -->

<body data-pc-preset="preset-9" data-pc-sidebar-caption="true" data-pc-layout="vertical" data-pc-direction="ltr" data-pc-theme_contrast="" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
    <div class="page-loader">
        <div class="bar"></div>
    </div>
    <input type="hidden" id="base_url" value="<?= base_url() ?>">
    <!-- [ Pre-loader ] End --><!-- [ Sidebar Menu ] start -->
    <nav class="pc-sidebar">
        <div class="navbar-wrapper">
            <div class="m-header">
                <a href="../dashboard/index.html" class="b-brand text-primary"><!-- ========   Change your logo from here   ============ -->
                    <img src="<?= base_url() ?>public/assets/images/admin/ferti.png" class="img-fluid logo-lg" alt="logo" />
                    <span class="badge bg-light-success rounded-pill ms-2 theme-version"><?= $_COOKIE['sedeFerti'] ?></span></a>
            </div>
            <div class="navbar-content">
                
                <ul class="pc-navbar">
                    <?= $this->include('layouts/menu') ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ Sidebar Menu ] end --><!-- [ Header Topbar ] start -->

    <?= $this->include('layouts/header') ?>

    <!-- [ Header ] end --><!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">

            <?= $this->renderSection('content') ?>
            
        </div>
    </div>
    <!-- [ Main Content ] end -->
    
    <?= $this->include('layouts/footer') ?>
    <!-- Required Js -->
    <script src="<?= base_url() ?>public/assets/js/plugins/popper.min.js"></script>
    <script src="<?= base_url() ?>public/assets/js/plugins/simplebar.min.js"></script>
    <script src="<?= base_url() ?>public/assets/js/plugins/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>public/assets/js/fonts/custom-font.js"></script>
    <script src="<?= base_url() ?>public/assets/js/pcoded.js"></script>
    <script src="<?= base_url() ?>public/assets/js/plugins/feather.min.js"></script>
    <script src="<?= base_url() ?>public/assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>public/js/main.js"></script>
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
        main_layout_change("vertical");
    </script>

<script>
        localStorage.setItem("layout", "vertical");
    </script>

    <?= $this->renderSection('js') ?>
    
</body>
<!-- [Body] end -->
<!-- Mirrored from ableproadmin.com/other/sample-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jul 2024 04:21:23 GMT -->

</html>