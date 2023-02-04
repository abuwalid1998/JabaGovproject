<!DOCTYPE html>
<html dir="rtl" lang="ar">

<style>
   #mybody {
      margin: 0;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: #212529;
      text-align: right;
      background-color: #fff
   }

   .google-maps {
      position: relative;
      padding-bottom: 75%; // This is the aspect ratio
      height: 0;
      overflow: hidden;
   }

   .google-maps iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100% !important;
      height: 100% !important;
   }


   #splash-screen {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #fff;
  z-index: 9999;
}

.loading-indicator {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 50px;
  height: 50px;
  border: 4px solid #333;
  border-radius: 50%;
  border-top-color: #fff;
  animation: spin 1s linear infinite;
}

@keyframes spin {
  to {
    transform: translate(-50%, -50%) rotate(360deg);
  }
}


.zoom {
  padding: 50px;
  background-color: green;
  transition: transform .2s; /* Animation */
  width: 200px;
  height: 200px;
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

</style>

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootsrap -->
   <link rel="stylesheet" href="<?= base_url() ?>asset/vendor/bootstrap/css/bootstrap.min.css">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="<?= base_url() ?>asset/vendor/fontawesome-free/css/all.min.css">
   <!--Custom Css -->
   <link rel="stylesheet" href="<?= base_url('asset/css/style.css') ?>">



   <!-- Icon -->
   <link rel="icon" href="" type="image/png">
   <title>بلدية جبع</title>
</head>

<body dir="rtl" id="mybody">


   <div id="splash-screen">
      <div class="loading-indicator"></div>
   </div>

   <!-- Navbar -->
   <?php $this->load->view('front/layouts/_navbar'); ?>
   <!-- End of Navbar -->

   <!-- Content -->
   <?php $this->load->view('front/pages/' . $page); ?>
   <!-- End of Content -->

   <!-- Footer -->
   <?php $this->load->view('front/layouts/_footer'); ?>
   <!-- End of Footer -->




   <script>

window.onload = function() {
  document.getElementById("splash-screen").style.display = "none";
};

window.addEventListener("load", function() {
  document.getElementById("splash-screen").style.display = "none";
});
   </script>
   <!-- Jquery -->
   <script src="<?= base_url() ?>asset/vendor/jquery/jquery.min.js"></script>
  
   <script src="<?= base_url() ?>asset/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>