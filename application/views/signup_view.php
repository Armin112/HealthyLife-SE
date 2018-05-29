<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<title>HealthyLife - Signup</title>

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.png" />

<!-- font -->
<link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

<!-- Plugins -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/plugins-css.css'); ?>" />

<!-- Typography -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/typography.css'); ?>" />

<!-- Shortcodes -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/shortcodes/shortcodes.css'); ?>" />

<!-- Style -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>" />

<!-- Main-style -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/theme-style.css'); ?>" />

<!-- Responsive -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/responsive.css'); ?>" /> 
</head>

<body>

 <div class="wrapper">

<!--=================================
 preloader -->
 
<div id="pre-loader">
    <img src="images/loader.svg" alt="">
</div>

<!--=================================
 preloader -->
 
 
<!--=================================
 signup-->

<section class="login-box-main height-100vh page-section-ptb parallax"  style="background: url(<?php echo base_url('assets/images/slider-bg.jpg)'); ?>;">
  <div class="login-box-main-middle">
  <div class="container">
     <div class="row justify-content-center no-gutter">
      <div class="col-lg-2 col-md-4">
        <div class="login-box-left  white-bg">
        <a href="index.html">   <img class="logo-small" src="images/logo-emblem.png" alt=""></a>
             <ul class="nav">
               <li><a href="login.html"> <i class="ti-user"></i> Login</a></li>
               <li class="active"><a href="#"> <i class="ti-pencil-alt"></i> Signup</a></li>
            </ul>
           <div class="social-icons color-hover clearfix pos-bot pb-30 pl-30">
            <ul>
              <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li class="social-instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
       <div class="col-md-4 bitcoin-about-bg">
         <div class="login-box pos-r text-white ">
          <h2 class="text-white mb-20">Welcome to HealthyLife</h2>
          <p class="mb-10 text-white">Make your life healthy. </p>
          <p class="text-white">Save your money.</p> 
          <ul class="list-unstyled pos-bot pb-40">
            <li class="list-inline-item"><a class="text-white" href="#"> Terms of Use</a> </li>
            <li class="list-inline-item"><a class="text-white" href="#"> Privacy Policy</a></li>
          </ul>
         </div> 
       </div>
       <div class="col-md-4">
        <div class="login-box pb-50 clearfix white-bg">
        <h3 class="mb-30">Signup</h3>
        <?php
                  $error_msg=$this->session->flashdata('error_msg');
                  if($error_msg){
                    echo $error_msg;
                  }
        ?>
        <form role="form" method="post" action="<?php echo base_url('user/register_user'); ?>">
          <div class="row">
             <div class="section-field mb-20 col-sm-6">
               <label class="mb-10" for="name">First name </label>
                 <input id="firstname" class="web form-control" type="text" placeholder="" name="firstname" required>
              </div>
               <div class="section-field mb-20 col-sm-6">
               <label class="mb-10" for="name">Last name </label>
                 <input id="lastname" class="web form-control" type="text" placeholder="" name="lastname" required>
              </div>
            </div>
            <div class="section-field mb-20">
                 <label class="mb-10" for="name">Username </label>
                  <input id="username" type="text" placeholder="" class="form-control" name="username" required>
             </div>
            <div class="section-field mb-20">
                 <label class="mb-10" for="name">Email </label>
                  <input id="email" type="email" placeholder="" class="form-control" name="email" required>
             </div>
            <div class="section-field mb-20">
             <label class="mb-10" for="Password">Password </label>
               <input id="password" class="Password form-control" type="password" placeholder="" name="password" required>
            </div>
                <button id="submit" name="submit" class="button">
                <span>Signup</span>
                <i class="fa fa-check"></i>
                </button>
          </div>
                </form>
         </div>
        </div>
      </div>
  </div>
</section>

<!--=================================
 Signup-->
  

</div>

  

<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div> 
 
<!-- jquery -->
<script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>

<!-- plugins-jquery -->
<script src="<?php echo base_url('assets/js/plugins-jquery.js'); ?>"></script>

<!-- plugin_path -->
<script>var plugin_path = 'js/';</script>

<!-- custom -->
<script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>

 

<!-- bitcoin script -->

 <script>
  (function(b,i,t,C,O,I,N) {
    window.addEventListener('load',function() {
      if(b.getElementById(C))return;
      I=b.createElement(i),N=b.getElementsByTagName(i)[0];
      I.src=t;I.id=C;N.parentNode.insertBefore(I, N);
    },false)
  })(document,'script','https://widgets.bitcoin.com/widget.js','btcwdgt');
</script>

</body>
</html>