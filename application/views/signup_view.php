<section class="login-box-main height-100vh page-section-ptb parallax"  style="background: url(<?php echo base_url('assets/images/slider-bg.jpg)'); ?>;">
  <div class="login-box-main-middle">
  <div class="container">
     <div class="row justify-content-center no-gutter" style="margin-top: 60px;">
      <div class="col-lg-2 col-md-4">
        <div class="login-box-left  white-bg">
        <a href="index.html">   <img class="logo-small" src="images/logo-emblem.png" alt=""></a>
             <ul class="nav">
               <li><a href="<?php echo base_url('home/login'); ?>"> <i class="ti-user"></i> Login</a></li>
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
        <form role="form" method="post" action="<?php echo base_url('user/register_user'); ?>" id="registerForm">
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

<!--<script>
$("#registerForm").submit(function() {
    var data = $("#registerForm").serialize();
    //alert(data); return false;
    $.ajax({
        url: "/user/register_user",
        data: data,
        type: "POST",
   success: function(msg) {
            if (msg) {
               alert(msg);
            } else {
               alert("nothing came back For some reason");
            }
        }
    });
    return false;
});

</script>

</body>
</html>