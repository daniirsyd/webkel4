<!DOCTYPE html>
<html>
<head>
	<title>Hotel Booking Website</title>
	<!-- CSS only -->
<?php require('inc/links.php'); ?>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<link rel="stylesheet" type="text/css" href="css/common.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<style>
  .pop:hover{
    border-top-color: var(--teal) !important;
    transform: scale(1.03);
    transition: all 0.3s;
  }
</style>

</head>
<body>

<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">OUR FACILITIES</h2>

  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
    
  </p>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
          <img src="images/facilities/Wifi.svg" width="40px">
          <h5 class="m-0 ms-3">Wifi</h5>
        </div>  
          <p>
          Wi-Fi di Mares Hotel dirancang untuk memenuhi kebutuhan 
          tamu yang menginginkan akses internet yang cepat dan stabil.
          </p> 
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
          <img src="images/facilities/IMG_49949.svg" width="40px">
          <h5 class="m-0 ms-3">AC</h5>
        </div>  
          <p>
          AC di Mares Hotel tidak hanya berfungsi untuk menjaga suhu kamar tetap nyaman,
          tetapi juga dirancang dengan perhatian terhadap kebersihan.
          </p> 
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
          <img src="images/facilities/IMG_41622.svg" width="40px">
          <h5 class="m-0 ms-3">TV</h5>
        </div>  
          <p>
          Mares Hotel, kami menghadirkan pengalaman hiburan yang luar 
          biasa melalui fasilitas TV yang canggih dan memukau. 
          </p> 
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
          <img src="images/facilities/IMG_27079.svg" width="40px">
          <h5 class="m-0 ms-3">Heather</h5>
        </div>  
          <p>
          Sistem pemanas kami dirancang untuk memberikan kehangatan yang memanjakan,
           menciptakan suasana yang nyaman.
          </p> 
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
          <img src="images/facilities/pool.png" width="40px">
          <h5 class="m-0 ms-3">Swimming Pool</h5>
        </div>  
          <p>
           Mares Hotel juga dilengkapi dengan fasilitas kolam renang kami yang luar biasa 
           tempat ini ideal untuk menenangkan diri.
          </p> 
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
          <img src="images/facilities/8ball.jpg" width="40px">
          <h5 class="m-0 ms-3">Billiard</h5>
        </div>  
          <p>
          Ruang biliar di Serenity Haven Hotel dirancang dengan perhatian khusus terhadap kenyamanan dan gaya. 
          Dengan meja biliar yang elegan.
          </p> 
      </div>
    </div>
  </div>
</div>

<?php require('inc/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>