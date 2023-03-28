<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>CI4 - <?= $title ?></title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

      
        <link rel="shortcut icon" href="media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="media/favicons/apple-touch-icon-180x180.png">

        <link rel="stylesheet" href="js/plugins/slick/slick.css">
        <link rel="stylesheet" href="js/plugins/slick/slick-theme.css">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
        <link rel="stylesheet" id="css-main" href="css/codebase.min.css">

    </head>
    <body>

        <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">
            <!-- Side Overlay-->
            <?= $this->include('components/aside') ?>
            <!-- END Side Overlay -->

            <!-- Sidebar -->
            <?= $this->include('components/sidebar') ?>
            <!-- END Sidebar -->

            <!-- Header -->
            <?= $this->include('components/header') ?>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <?= $this->renderSection('contents') ?>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <?= $this->include('components/footer') ?>
            <!-- END Footer -->
        </div>

        <script src="js/codebase.core.min.js"></script>

        <script src="js/codebase.app.min.js"></script>

        <script src="js/plugins/chartjs/Chart.bundle.min.js"></script>
        <script src="js/plugins/slick/slick.min.js"></script>

        <script src="js/pages/be_pages_dashboard.min.js"></script>
    </body>
</html>