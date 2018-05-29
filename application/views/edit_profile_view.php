<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}'  style="background: url(<?php echo base_url('assets/images/slider-bg.jpg)'); ?>;">
  <div class="container">
    <div class="row"> 
      <div class="col-lg-12"> 
      <div class="page-title-name">
          <h1>My Profile</h1>
          <p>Edit information about your profile.</p>
        </div>
          <ul class="page-breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
            <li><a href="#">My Profile</a> <i class="fa fa-angle-double-right"></i></li>
           
       </ul>
     </div>
     </div>
  </div>
</section>


<section class="page-section-ptb gray-bg">
  <div class="container">
  <div class="row">
  <div class="login-box pb-50 clearfix white-bg" style="width:60%; margin:auto;">
       
  <?php
              $success_msg= $this->session->flashdata('success_msg');
              $error_msg= $this->session->flashdata('error_msg');
 
                  if($success_msg){
                    ?>
                    <div class="alert alert-success">
                      <?php echo $success_msg; ?>
                    </div>
                  <?php
                  }
                  if($error_msg){
                    ?>
                    <div class="alert alert-danger">
                      <?php echo $error_msg; ?>
                    </div>
                    <?php
                  }
                  ?> 
        <form role="form" method="post" action="<?php echo base_url('user/edit_user'); ?>">
        <input id="id" class="web form-control" type="hidden" value="<?php echo $this->session->userdata('id'); ?>" placeholder="" name="id" required>
             <div class="section-field mb-20">
               <label class="mb-10" for="name">First name </label>
                 <input id="firstname" class="web form-control" type="text" value="<?php echo $this->session->userdata('firstname'); ?>" placeholder="" name="firstname" required>
              </div>
               <div class="section-field mb-20">
               <label class="mb-10" for="name">Last name </label>
                 <input id="lastname" class="web form-control" type="text" value="<?php echo $this->session->userdata('lastname'); ?>" placeholder="" name="lastname" required>
              </div>
           
            <div class="section-field mb-20">
                 <label class="mb-10" for="name">Username </label>
                  <input id="username" type="text" placeholder="" class="form-control" value="<?php echo $this->session->userdata('username'); ?>" disabled name="username" required>
             </div>
            <div class="section-field mb-20">
                 <label class="mb-10" for="name">Email </label>
                  <input id="email" type="email" placeholder="" class="form-control" value="<?php echo $this->session->userdata('email'); ?>" name="email" required>
             </div>
             
                <button id="submit" name="submit" class="button">
                <span>Edit Profile</span>
                <i class="fa fa-check"></i>
                </button>
          </div>
                </form>
         </div>
    </div>
   </div>
</section>