<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background: url(<?php echo base_url('assets/images/slider-bg.jpg)'); ?>;">
<div class="container">
    <div class="row"> 
      <div class="col-lg-12"> 
      <div class="page-title-name">
          <h1>Add Drug</h1>
          <p>Add new drug to you system.</p>
        </div>
          <ul class="page-breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
            <li><a href="#">Add Drug</a> <i class="fa fa-angle-double-right"></i></li>
           
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
        <form role="form" method="post" action="<?php echo base_url('admin/add_drug_func'); ?>"  enctype="multipart/form-data">
             <div class="section-field mb-20">
               <label class="mb-10" for="name">Drug Title </label>
                 <input id="title" class="web form-control" type="text" placeholder="" name="title" required>
              </div>
               <div class="section-field mb-20">
               <label class="mb-10" for="name">Drug Content </label>
               <textarea id="content" class="web form-control" style="height:200px;" placeholder="" name="content" required></textarea>
              </div>
           
            <div class="section-field mb-20">
                 <label class="mb-10" for="name">Drug Tags </label>
                  <input id="tags" type="text" placeholder="" class="form-control"  name="tags" required>
             </div>
             <div class="section-field mb-20">
                 <label class="mb-10" for="name">Drug Category </label>
                 <select class="form-control" id="category" name="category" style="height: unset;" required>
                    <option value="">Select Category</option>
                    <option value="Herbs">Herbs</option>
                    <option value="Fruits">Fruits</option>
                    <option value="Vegetables">Vegetables</option> 
                </select>
                 
             </div>

             <div class="section-field mb-20">
                 <label class="mb-10" for="name">Drug Image </label>
                  <input id="userfile" type="file" placeholder="" class="form-control"  name="userfile">
             </div>
             
                <button id="submit" name="submit" class="button">
                <span>Add Drug</span>
                <i class="fa fa-check"></i>
                </button>
          </div>
                </form>
         </div>
    </div>
   </div>
</section>