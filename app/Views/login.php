<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<?php
$username = [
    'name' => 'username',
    'id' => 'username',
    'value' => null,
    'class' => 'form-control'
];

$password = [
    'name' => 'password',
    'id' => 'password',
    'class' => 'form-control'
];
$session = session();
$errors = $session->getFlashdata('errors');

?>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md7 col-lg-5 mx-auto">
            <div class="card card-signin my-5 ">
                <div class="text-center">
                    <br>
                    <img src="<?= base_url("img/logo_collect.png") ?>" alt="" class="img-fluid center" width="200">
                </div>
                <div class="card-body mx-4" style="max-width: 25rem;">
                    <h3 class="card-title text-center">Login</h3>
                    <?php if ($errors != null) : ?>
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">Terjadi Kesalahan</h4>
                            <hr>
                            <p class="mb-0">
                                <?php
                                foreach ($errors as $err) {
                                    echo $err . '<br>';
                                }
                                ?>
                            </p>

                        </div>
                    <?php endif ?>
                    <?= form_open('Auth/login') ?>
                    <div class="form-group">
                        <?= form_label("Username", "username") ?>
                        <?= form_input($username) ?>
                    </div>
                    <div class="form-group">
                        <?= form_label("Password", "password") ?>
                        <?= form_password($password) ?>
                    </div>
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                    <div class="text-right">
                        <?= form_submit('submit', 'Submit', ['class' => 'btn btn-primary']) ?>
                    </div>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>