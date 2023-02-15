<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.1
* @link https://coreui.io
* Copyright (c) 2022 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<!-- Breadcrumb-->
<html lang="en">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <link rel="apple-touch-icon" sizes="57x57" href="<?= BASE_URL ?>/Assets/coreui/assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= BASE_URL ?>/Assets/coreui/assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= BASE_URL ?>/Assets/coreui/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= BASE_URL ?>/Assets/coreui/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= BASE_URL ?>/Assets/assets/coreui/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= BASE_URL ?>/Assets/assets/coreui/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= BASE_URL ?>/Assets/assets/coreui/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= BASE_URL ?>/Assets/assets/coreui/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= BASE_URL ?>/Assets/assets/coreui/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= BASE_URL ?>/Assets/coreui/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= BASE_URL ?>/Assets/coreui/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= BASE_URL ?>/Assets/coreui/assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= BASE_URL ?>/Assets/coreui/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= BASE_URL ?>/Assets/assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <link rel="stylesheet" href="<?= BASE_URL ?>/Assets/vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/Assets/css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="<?= BASE_URL ?>/Assets/coreui/css/style.css" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="<?= BASE_URL ?>/Assets/coreui/css/examples.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        // Shared ID
        gtag('config', 'UA-118965717-3');
        // Bootstrap ID
        gtag('config', 'UA-118965717-5');
    </script>
</head>

<body>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <header class="header header-sticky mb-4">
            <div class="container-fluid">
                <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                    <svg class="icon icon-lg">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
                    </svg>
                </button><a class="header-brand d-md-none" href="#">
                    <svg width="118" height="46" alt="CoreUI Logo">
                        <use xlink:href="assets/brand/coreui.svg#full"></use>
                    </svg></a>
                <ul class="header-nav d-none d-md-flex">
                    <li class="nav-item"><a class="nav-link" href="<?=BASE_URL?>/admin">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?=BASE_URL?>/admin/users">Users</a></li>
                </ul>
                <ul class="header-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">
                            <svg class="icon icon-lg">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                            </svg></a></li>
                    <li class="nav-item"><a class="nav-link" href="#">
                            <svg class="icon icon-lg">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
                            </svg></a></li>
                    <li class="nav-item"><a class="nav-link" href="#">
                            <svg class="icon icon-lg">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                            </svg></a></li>
                </ul>

                <? if (!isset($_SESSION['user'])): ?>
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-44">
                        <a class="btn btn-primary" href="<?=BASE_URL?>/admin/signin" role="button">Sign in</a>
                        <a class="btn btn-primary" href="<?=BASE_URL?>/admin/signup" role="button">Sign up</a>
                    </div>
                <? else: ?>
                    <ul class="header-nav ms-3">
                        <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                <?=$_SESSION['user']['login']; ?>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end pt-0">
                                <div class="dropdown-header bg-light py-2">
                                    <div class="fw-semibold">Account</div>
                                </div><a class="dropdown-item" href="#">
                                    <svg class="icon me-2">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                                    </svg> Updates<span class="badge badge-sm bg-info ms-2">42</span></a><a class="dropdown-item" href="#">
                                    <svg class="icon me-2">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                                    </svg> Messages<span class="badge badge-sm bg-success ms-2">42</span></a><a class="dropdown-item" href="#">
                                    <svg class="icon me-2">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-task"></use>
                                    </svg> Tasks<span class="badge badge-sm bg-danger ms-2">42</span></a><a class="dropdown-item" href="#">
                                    <svg class="icon me-2">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-comment-square"></use>
                                    </svg> Comments<span class="badge badge-sm bg-warning ms-2">42</span></a>
                                <div class="dropdown-header bg-light py-2">
                                    <div class="fw-semibold">Settings</div>
                                </div><a class="dropdown-item" href="#">
                                    <svg class="icon me-2">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                                    </svg> Profile</a><a class="dropdown-item" href="#">
                                    <svg class="icon me-2">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                                    </svg> Settings</a><a class="dropdown-item" href="#">
                                    <svg class="icon me-2">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-credit-card"></use>
                                    </svg> Payments<span class="badge badge-sm bg-secondary ms-2">42</span></a><a class="dropdown-item" href="#">
                                    <svg class="icon me-2">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-file"></use>
                                    </svg> Projects<span class="badge badge-sm bg-primary ms-2">42</span></a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                                    <svg class="icon me-2">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                                    </svg> Lock Account</a><a class="dropdown-item" href="<?=BASE_URL?>/admin/logout">
                                    <svg class="icon me-2">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                                    </svg> Logout</a>
                            </div>
                        </li>
                    </ul>
                <? endif; ?>
            </div>
        </header>

        <?= $this->pageContent ?>

        <footer class="footer">
            <div><a href="https://coreui.io">CoreUI </a><a href="https://coreui.io">Bootstrap Admin Template</a> © 2022 creativeLabs.</div>
            <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/docs/">CoreUI UI Components</a></div>
        </footer>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="<?= BASE_URL ?>/Assets/coreui/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="<?= BASE_URL ?>/Assets/coreui/vendors/simplebar/js/simplebar.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict'
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')
        // Loop over them and prevent submission
        Array.prototype.slice.call(forms).forEach(function(form) {
          form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }
            form.classList.add('was-validated')
          }, false)
        })
      })()
    </script>
    
    <script src="<?= BASE_URL ?>/Assets/coreui/vendors/@coreui/utils/js/coreui-utils.js"></script>
    <!-- <script src="<?= BASE_URL ?>/Assets/js/main.js"></script> -->
    <script>
    </script>
</body>

</html>