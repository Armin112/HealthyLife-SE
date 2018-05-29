<?php 
$id=$this->session->userdata('id');
$type = $this->session->userdata('type');
?>
  <header id="header" class="header default">
<!--=================================
 mega menu -->

<div class="menu">  
  <!-- menu start -->
   <nav id="menu" class="mega-menu">
    <!-- menu list items container -->
    <section class="menu-list-items">
     <div class="container"> 
      <div class="row"> 
       <div class="col-lg-12 col-md-12"> 
        <!-- menu logo -->
        <ul class="menu-logo">
            <li>
                <a href="index-01.html"><img id="logo_img" src="<?php echo base_url('assets/images/logo.png'); ?>" alt="logo"> </a>
            </li>
        </ul>
        <!-- menu links -->
        <div class="menu-bar">
         <ul class="menu-links">
            <li class="active"><a href="<?php echo base_url('home/index'); ?>">HOME </a>  </li>
            <li><a href="<?php echo base_url('home/about'); ?>">ABOUT</a></li>
            <li><a href="#"> CATEGORIES  <i class="fa fa-angle-down fa-indicator"></i> </a> 
				<ul class="drop-down-multilevel left-side">
                    <li><a href="<?php echo base_url('home/herbs'); ?>">Herbs</a>  </li>
                    <li><a href="fruits.html">Fruits</a> </li>
                    <li><a href="vegetables.html">Vegetables</a> </li>
                </ul>
            </li>
            <li><a href="<?php echo base_url('home/blog'); ?>"> BLOG </a> </li>
            <li><a href="<?php echo base_url('home/contact'); ?>"> CONTACT US  </a> </li>
            <?php 
           if($id) { ?>
            <li><a href="<?php echo base_url('home/edit_profile'); ?>">MY PROFILE</a></li>
             <?php  } 
            if($id && $type==1){
            ?>
            <li><a href="#"> ADMIN  <i class="fa fa-angle-down fa-indicator"></i> </a> 
				<ul class="drop-down-multilevel left-side">
                    <li><a href="<?php echo base_url('admin/admin_users'); ?>">Users</a>  </li>
                    <li><a href="<?php echo base_url('admin/admin_diseases'); ?>">Diseases</a>  </li>
                    <li><a href="<?php echo base_url('admin/admin_drugs'); ?>">Drugs</a>  </li>
                </ul>
            </li>
            <?php }
           if(!$id){ ?>
            <li><a class="button mt-30 mb-20 mr-0" href="<?php echo base_url('home/login'); ?>" style="margin-left: 20px;padding: 10px 20px;margin-top: 15px !important;">LOGIN</a></li>
          <?php  }
          else { ?>
          <li><a class="button mt-30 mb-20 mr-0" href="<?php echo base_url('user/user_logout'); ?>" style="margin-left: 20px;padding: 10px 20px;margin-top: 15px !important;">LOGOUT</a></li>
          <?php } ?>
        </ul>
        </div>
       </div>
      </div>
     </div>
    </section>
   </nav>
  <!-- menu end -->
 </div>
</header> 