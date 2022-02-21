<!--
=========================================================
* Material Dashboard 2 - v3.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php $this->disableAutoLayout();?>
<?php $companyname = \Cake\ORM\TableRegistry::getTableLocator()->get('baseContent')->get('2')->get('bc_string')?>
<?php $imagepath = \Cake\ORM\TableRegistry::getTableLocator()->get('baseContent')->get('3')->get('bc_path')?>
<?php
$displayname ="CakeERP";
if(strlen($companyname) > 0){
    $displayname= "<img src='/img/cake.icon.png' alt='logo'>&nbsp;&nbsp;".$companyname;
}?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/img/favicon.png">
    <title>
        CakeERP4 Login
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>

<body>
<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image:url(<?= $imagepath?>);">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-12" style="margin-left: auto !important;">
                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                        <div class="card-title row" style="margin-top: 5% !important;text-align: center"><p><?= $displayname?></p><br><h3>Sign In</h3></div>
                        <div class="card-body">
                            <div class="text-warning"><?php echo $this->Flash->render()?></div>
                            <?php echo $this->Form->create()?>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" required="required" id="sf-email" name="sf_email">
                                </div>
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" required="required" id="sf-password" name="sf_password">
                                </div>
                                <div class="form-check form-switch d-flex align-items-center mb-3">
                                    <input class="form-check-input" type="checkbox" id="rememberMe">
                                    <label class="form-check-label mb-0 ms-2" for="rememberMe">Remember me</label>
                                </div>
                                <div class="text-center">
                                    <?php echo $this->Form->button('Sign in',['class'=>'btn bg-gradient-primary w-100 my-4 mb-2']);?>
                                </div>
                                <p class="mt-4 text-sm text-center">Don't have an account? Contact your manager to get one.</p>
                            <?php echo $this->Form->end();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer position-absolute bottom-2 py-2 w-100">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-12 col-md-8 my-auto">
                    </div>
                    <div class="col-12 col-md-4">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item text-white" >
                                <small class="nav-link pe-0 text-white" id="currenttime"></small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</main>
<!--   Core JS Files   -->
<script src="/js/core/popper.min.js"></script>
<script src="/js/core/bootstrap.min.js"></script>
<script src="/js/plugins/perfect-scrollbar.min.js"></script>
<script src="/js/plugins/smooth-scrollbar.min.js"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="/js/material-dashboard.min.js?v=3.0.0"></script>

<script>
    function refreshTime() {
        var dt = new Date();
        document.getElementById('currenttime').innerHTML=dt.toString().substring(0, 33)
        document.getElementById('title').innerHTML="Sign in"
    }
    setInterval(refreshTime, 1000);
</script>
</body>

</html>
