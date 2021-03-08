<?= $this->extend('layout') ?>
<?= $this->section('content') ?>


<div class="py-5 text-center text-info background-info">
    <div class="container">
        <div class="row">
            <div class="mx-auto col-md-12">
                <!--- Edit disini --->
                <h1 class="mb-3" contenteditable="true">Meet our team</h1>
            </div>
        </div>
        <div class="row">
            <!--- Edit disini --->
            <div class="col-lg-4 col-md-6 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" alt="Card image cap" width="200" src="<?= base_url("img/background.png") ?>">
                <h4> <b>John kandy</b> </h4>
                <p class="mb-0">CEO and founder</p>
            </div>
            <!--- Edit disini --->
            <div class="col-lg-4 col-md-6 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="<?= base_url("img/background.png") ?>" alt="Card image cap" width="200">
                <h4> <b>Sam ilana</b> </h4>
                <p class="mb-0">Co-founder</p>
            </div>
            <!--- Edit disini --->
            <div class="col-lg-4 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="<?= base_url("img/background.png") ?>" width="200">
                <h4> <b>Maria Samantha</b> </h4>
                <p class="mb-0">HR Manager</p>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>