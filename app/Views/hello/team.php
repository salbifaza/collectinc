<?= $this->extend('layout') ?>
<?= $this->section('content') ?>


<div class="py-5 text-center text-info background-info">
    <div class="container">
        <div class="row">
            <div class="mx-auto col-md-12">
                <!--- Edit disini --->
                <h1 class="mb-3" contenteditable="true">The Pioneers</h1>
                <p>A little team with big dreams behind Collect.inc</p>
                <br>
            </div>
        </div>
        <div class="row">
            <!--- Edit disini --->
            <div class="col-lg-4 col-md-6 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" alt="Card image cap" width="200" src="<?= base_url("img/bella.jpg") ?>">
                <h4> <b>Aulia Salsabella S.</b> </h4>
                <h6>---- Oseanografi ----</h6>
                <p>"A small progress is still a progress"</p>
            </div>
            <!--- Edit disini --->
            <div class="col-lg-4 col-md-6 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="<?= base_url("img/putri.jpeg") ?>" alt="Card image cap" width="200">
                <h4> <b>Putri Risa F.</b> </h4>
                <h5 class="mb-0">Biologi</h5>
            </div>
            <!--- Edit disini --->
            <div class="col-lg-4 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="<?= base_url("img/background.png") ?>" width="200">
                <h4> <b>Salbi Faza R.</b> </h4>
                <h5 class="mb-0">Oseanografi</h5>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>