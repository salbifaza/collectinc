<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php
$username = [
    'name' => 'username',
    'id' => 'username',
    'value' => null,
    'class' => 'form-control'
];
$first_name = [
    'name' => 'first_name',
    'id' => 'first_name',
    'value' => null,
    'class' => 'form-control'
];

$last_name = [
    'name' => 'last_name',
    'id' => 'last_name',
    'value' => null,
    'class' => 'form-control'
];

$e_mail = [
    'name' => 'e_mail',
    'id' => 'e_mail',
    'class' => 'form-control'
];

$phone_number = [
    'name' => 'phone_number',
    'id' => 'phone_number',
    'class' => 'form-control'
];

$password = [
    'name' => 'password',
    'id' => 'password',
    'class' => 'form-control'
];

$repeatPassword = [
    'name' => 'repeatPassword',
    'id' => 'repeatPassword',
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
                    <h3 class="card-title text-center">Register Form</h3>
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
                    <?= form_open('Auth/register') ?>
                    <div class="form-group">
                        <?= form_label("Username", "username") ?>
                        <?= form_input($username) ?>
                    </div>
                    <div class="form-group">
                        <?= form_label("First name", "first_name") ?>
                        <?= form_input($first_name) ?>
                    </div>
                    <div class="form-group">
                        <?= form_label("Last name", "last_name") ?>
                        <?= form_input($last_name) ?>
                    </div>
                    <div class="form-group">
                        <?= form_label("e-mail", "e_mail") ?>
                        <?= form_input($e_mail) ?>
                    </div>
                    <div class="form-group">
                        <?= form_label("phone number", "phone_number") ?>
                        <?= form_input($phone_number) ?>
                    </div>
                    <div class="form-group">
                        <?= form_label("Password", "password") ?>
                        <?= form_password($password) ?>
                    </div>
                    <div class="form-group">
                        <?= form_label("Repeat Password", "repeatPassword") ?>
                        <?= form_password($repeatPassword) ?>
                    </div>
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