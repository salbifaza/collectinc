<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
$session = session();
?>
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url("img/logo_collect.png") ?>" height="40" class=" d-block mb-1 mx-auto align-middle mr">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mr-auto">
                <?php if ($session->get('isLoggedIn')) : ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= site_url() ?>"><i class="fa fa-fw fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= site_url('home/about') ?>">About </a>
                    </li>
                    <li class="nav-item active dropdown">
                        <a class="nav-link dropdown-toggle" href="<?= site_url('#') ?>" id="navbardrop" data-toggle="dropdown">Services</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?= site_url('home/service') ?>">Coming soon!</a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= site_url('home/team') ?>">Team</a>
                    </li>
                    <li class="nav-item active dropdown">
                        <a class="nav-link dropdown-toggle" href="<?= site_url('#') ?>" id="navbardrop" data-toggle="dropdown">Member Area</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?= site_url('home/profile') ?>">Profile</a>
                            <a class="dropdown-item" href="<?= site_url('home/order') ?>">Order</a>
                            <a class="dropdown-item" href="<?= site_url('home/history') ?>">History</a>
                        </div>
                    </li>

                <?php else : ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= site_url() ?>"><i class="fa fa-fw fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= site_url('home/about') ?>">About </a>
                    </li>
                    <li class="nav-item active dropdown">
                        <a class="nav-link dropdown-toggle" href="<?= site_url('#') ?>" id="navbardrop" data-toggle="dropdown">Services</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?= site_url('home/service') ?>">Coming soon!</a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= site_url('home/team') ?>">Team <span class="sr-only">(current)</span></a>
                    </li>
                <?php endif ?>
            </ul>
            <div class="form-inline my-2 my-lg-0">
                <ul class="navbar-nav mr-auto">
                    <?php if ($session->get('isLoggedIn')) : ?>
                        <li class="nav-item">
                            <a class="btn btn-light" href="<?= site_url('auth/logout') ?>"><i class="fa fa-fw fa-user"></i>Logout</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="btn btn-light" href="<?= site_url('auth/login') ?>"><i class="fa fa-fw fa-user"></i>Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-light" href="<?= site_url('auth/register') ?>">Register</a>
                        </li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </div>
</nav>