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
                <p>Collect.inc merupakan aplikasi yang bergerak dalam jasa penyaluran limbah makanan. 
                    Collect.inc menjembatani antara pemilik limbah makanan dengan jasa pengelola limbah. 
                    Sampah dijual kepada jasa pengelola imbah dan pengguna aplikasi/user akan mendapatkan uang & poin dari aktivitas jual beli sampah makanan. 
                    Collect.inc akan menyalurkan limbah makanan baik dari domestik yang berskala kecil hingga besar seperti restoran dan bisnis ritel kepada pihak-pihak yang dapat mengolah limbah menjadi berbagai produk ramah lingkungan</p>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>