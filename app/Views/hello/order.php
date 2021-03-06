<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<?php
$alamat_jalan = [
    'name' => 'alamat_jalan',
    'id' => 'alamat_jalan',
    'class' => 'form-control',
];

$alamat_kota = [
    'name' => 'alamat_kota',
    'id' => 'alamat_kota',
    'class' => 'form-control',
];

$alamat_kecamatan = [
    'name' => 'alamat_kecamatan',
    'id' => 'alamat_kecamatan',
    'class' => 'form-control',
];

$alamat_kelurahan = [
    'name' => 'alamat_kelurahan',
    'id' => 'alamat_kelurahan',
    'class' => 'form-control',
];

$alamat_kode_pos = [
    'name' => 'alamat_kode_pos',
    'id' => 'alamat_kode_pos',
    'class' => 'form-control',
];

$submit = [
    'name' => 'submit',
    'id' => 'submit',
    'value' => 'Submit',
    'class' => 'btn btn-dark',
    'type' => 'submit',
];

?>

<div class="order-form my-4 mx-4">
    <div class="container pt-4">
        <div class="row">
            <div class="col-12">
                <h1>You can see my Order Form</h1>
                <span>with some explanation below</span>
                <hr class="mt-1">
            </div>
            <div class="col-12">
                <?= form_open('Barang/order') ?>
                <div class="row mt-3 mx-4">
                    <div class="col-12">
                        <label class="order-form-label">Adress</label>
                    </div>
                    <div class="form-control">
                        <?= form_label("Street Adress", 'alamat_jalan')  ?>
                        <?= form_input($alamat_jalan) ?>
                        <?= form_label("City", 'alamat_kota')  ?>
                        <?= form_input($alamat_kota) ?>
                        <?= form_label("Region", 'alamat_kecamatan')  ?>
                        <?= form_input($alamat_kecamatan) ?>
                        <?= form_label("Sub-District", 'alamat_kelurahan')  ?>
                        <?= form_input($alamat_kelurahan) ?>
                        <?= form_label("ZIP/ Postal Code", 'alamat_kode_pos')  ?>
                        <?= form_input($alamat_kode_pos) ?>
                        <div class="text-right mt-4">
                            <?= form_submit($submit) ?>
                        </div>
                    </div>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>