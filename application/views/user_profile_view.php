<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}'  style="background: url(<?php echo base_url('assets/images/slider-bg.jpg)'); ?>;">
  <div class="container">
    <div class="row"> 
      <div class="col-lg-12"> 
      <div class="page-title-name">
          <h1>My Profile</h1>
          <p>View your profile.</p>
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
  <table class="table table-bordered table-striped">
 
 
 <tr>
   <th colspan="2"><h4 class="text-center">User Info</h3></th>

 </tr>
   <tr>
     <td>Firstname</td>
     <td><?php echo $this->session->userdata('firstname'); ?></td>
   </tr>
   <tr>
     <td>Lastname</td>
     <td><?php echo $this->session->userdata('lastname');  ?></td>
   </tr>
   <tr>
     <td>Username</td>
     <td><?php echo $this->session->userdata('username');  ?></td>
   </tr>
   <tr>
     <td>Email address</td>
     <td><?php echo $this->session->userdata('email');  ?></td>
   </tr>
</table>
<a href="<?php echo base_url('user/user_logout');?>" >  <button type="button" class="btn-primary">Logout</button></a>
    </div>
   </div>
</section>