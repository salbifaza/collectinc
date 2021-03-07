<?php
$session = session();
?>
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url("img/logo_collect.png") ?>" width="50" class="d-inline-block align-middle mr">
            <span class="text-uppercase font-weight-bold">Collect.inc</span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mr-auto">
                <?php if ($session->get('isLoggedIn')) : ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= site_url() ?>">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= site_url('home/index') ?>">About </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= site_url('home/index') ?>">Services</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= site_url('home/index') ?>">Team</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= site_url('home/index') ?>">Connect</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= site_url('home/index') ?>">Bucket <span class="sr-only">(current)</span></a>
                    </li>
                <?php else : ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= site_url() ?>">Home </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= site_url('home/index') ?>">About </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= site_url('home/index') ?>">Services</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= site_url('home/index') ?>">Team</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= site_url('home/index') ?>">Connect <span class="sr-only">(current)</span></a>
                    </li>
                <?php endif ?>
            </ul>
            <div class="form-inline my-2 my-lg-0">
                <ul class="navbar-nav mr-auto">
                    <?php if ($session->get('isLoggedIn')) : ?>
                        <li class="nav-item">
                            <a class="btn btn-light" href="<?= site_url('auth/logout') ?>">Logout</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="btn btn-light" href="<?= site_url('auth/login') ?>">Login</a>
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