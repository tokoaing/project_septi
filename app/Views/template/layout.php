<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>Project</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>/assets/vendors/images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>/assets/vendors/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/assets/vendors/images/favicon-16x16.png" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/src/plugins/datatables/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/src/plugins/datatables/css/responsive.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/vendors/styles/style.css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-GBZ3SGGX85");
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                "gtm.start": new Date().getTime(),
                event: "gtm.js"
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- <div class="pre-loader">
        <div class="pre-loader-box">
            <div class="loader-logo">
                <img src="<?= base_url() ?>/assets/vendors/images/deskapp-logo.svg" alt="" />
            </div>
            <div class="loader-progress" id="progress_div">
                <div class="bar" id="bar1"></div>
            </div>
            <div class="percent" id="percent1">0%</div>
            <div class="loading-text">Loading...</div>
        </div>
    </div> -->

    <div class="header">
        <div class="header-left">
            <div class="menu-icon bi bi-list"></div>
            <div class="search-toggle-icon bi bi-search" data-toggle="header_search"></div>
        </div>
        <div class="header-right">

            <div class="user-info-dropdown">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <span class="user-icon">
                            <img src="<?= base_url() ?>/assets/vendors/images/photo1.jpg" alt="" />
                        </span>
                        <span class="user-name">Ross C. Lopez</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                        <a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
                        <a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
                        <a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
                        <a class="dropdown-item" href="login.html"><i class="dw dw-logout"></i> Log Out</a>
                    </div>
                </div>
            </div>
            <div class="github-link">
                <a href="https://github.com/dropways/deskapp" target="_blank"><img src="<?= base_url() ?>/assets/vendors/images/github.svg" alt="" /></a>
            </div>
        </div>
    </div>


    <div class="left-side-bar">
        <div class="brand-logo">
            <a href="index.html">
                <img src="<?= base_url() ?>/assets/vendors/images/deskapp-logo.svg" alt="" class="dark-logo" />
                <img src="<?= base_url() ?>/assets/vendors/images/deskapp-logo-white.svg" alt="" class="light-logo" />
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-house"></span><span class="mtext">Master</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="<?= base_url() ?>/home/index">User</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mobile-menu-overlay"></div>




    <div class="main-container">
        <div class="xs-pd-20-10 pd-ltr-20">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?= base_url() ?>">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="<?= base_url() ?><?= $link ?>"><?= $title ?></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?= $sublink ?>
                </li>
            </ol>

            <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                <?= $this->renderSection('isi') ?>
            </div>


            <!-- munculnya top doang, berrti ga ada css yang fixed bottom -->
            <div class="footer-wrap pd-20 mb-20 card-box">
                DeskApp - Bootstrap 4 Admin Template By
                <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
            </div>
        </div>
    </div>



    <!-- js -->
    <script src="<?= base_url() ?>/assets/vendors/scripts/core.js"></script>
    <script src="<?= base_url() ?>/assets/vendors/scripts/script.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendors/scripts/process.js"></script>
    <script src="<?= base_url() ?>/assets/vendors/scripts/layout-settings.js"></script>
    <script src="<?= base_url() ?>/assets/src/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="<?= base_url() ?>/assets/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>/assets/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/assets/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>/assets/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendors/scripts/dashboard3.js"></script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <!-- js -->
    <!-- buttons for Export datatable -->
    <script src="<?= base_url() ?>/assets/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>/assets/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/assets/src/plugins/datatables/js/buttons.print.min.js"></script>
    <script src="<?= base_url() ?>/assets/src/plugins/datatables/js/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>/assets/src/plugins/datatables/js/buttons.flash.min.js"></script>
    <script src="<?= base_url() ?>/assets/src/plugins/datatables/js/pdfmake.min.js"></script>
    <script src="<?= base_url() ?>/assets/src/plugins/datatables/js/vfs_fonts.js"></script>
    <!-- Datatable Setting js -->
    <script src="<?= base_url() ?>/assets/vendors/scripts/datatable-setting.js"></script>
    <!-- Google Tag Manager (noscript) -->

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


</body>

</html>