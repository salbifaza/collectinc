<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<head>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <script src="https://unpkg.com/scrollreveal"></script>
</head>

<br><br>

<section id="judul">
    <div class="container-fluid padding">
         <div class="row padding">
            <div class="col-lg-6">
                <img src="<?= base_url("img/logoyes.PNG") ?>" class="img-fluid animate__animated animate__zoomIn">  
                
            </div>
            <div class="col-lg-6">
                <br><br><br><br><br><br>
                <h1 class="animate__animated animate__fadeInDown animate__slow">About Collect.inc </h1>
                <br>
                <p class="animate__animated animate__fadeIn animate__slow animate__delay-1s">Collect.inc merupakan aplikasi yang bergerak dalam jasa penyaluran limbah makanan. 
                    Collect.inc menjembatani antara pemilik limbah makanan dengan jasa pengelola limbah. 
                    Sampah dijual kepada jasa pengelola imbah dan pengguna aplikasi/user akan mendapatkan uang & poin dari aktivitas jual beli sampah makanan. 
                    Collect.inc akan menyalurkan limbah makanan baik dari domestik yang berskala kecil hingga besar seperti restoran dan bisnis ritel kepada pihak-pihak yang dapat mengolah limbah menjadi berbagai produk ramah lingkungan</p>
            </div>
        </div>
    </div>
</section>

<!--- Connect --->
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-12">
            <h2>Connect</h2>
        </div>
        <div class="col-12 social padding">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
</div>
<br>

<!--- Footer --->
<hr class="light">
<footer>
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-md-4">
            <img src="<?= base_url("img/logo_collect.PNG") ?>" class="img-fluid">
                <p>Collect your food waste</p>
                <p>Combat climate change</p>
            </div>
            <div class="col-md-4">
                <h5>Information</h5>
                <hr class="light">
                <p>About Us</p>
                <p>Coming Soon</p>
                <p>Become Our Partner</p>
            </div>
            <div class="col-md-4">
                <h5>Contact Us</h5>
                <hr class="light">
                <p>No. Telp: 087739286151</p>
                <p>e-mail: inquiries@collect.inc</p>
                <p>Alamat: Jl. Ganesa No. 10, Bandung</p>
            </div>
            <div class="col-12">
                <hr class="light">
                <h5>&copy;Collect.inc 2021</h5>
                </hr>
            </div>
        </div>
    </div>
</footer>

<?= $this->endSection() ?>