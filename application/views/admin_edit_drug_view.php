<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background: url(<?php echo base_url('assets/images/slider-bg.jpg)'); ?>;">
<div class="container">
    <div class="row"> 
      <div class="col-lg-12"> 
      <div class="page-title-name">
          <h1>Edit Drug</h1>
          <p>Edit drug in you system.</p>
        </div>
          <ul class="page-breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
            <li><a href="#">Edit Drug</a> <i class="fa fa-angle-double-right"></i></li>
           
       </ul>
     </div>
     </div>
  </div>
</section>
<section class="page-section-ptb gray-bg">
  <div class="container">
  <div class="row">
  <div class="login-box pb-50 clearfix white-bg" style="width:70%; margin:auto;">
       
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
                  <?php foreach($single_drug as $drug) { ?>
        <form role="form" method="post" action="<?php echo base_url('admin/edit_drug/'.$drug->id); ?>">
        <input id="id" class="web form-control" type="hidden" value="<?php echo $drug->id; ?>" placeholder="" name="id" required>
             <div class="section-field mb-20">
               <label class="mb-10" for="name">Drug Title </label>
                 <input id="title" class="web form-control" type="text" placeholder="" value="<?php echo $drug->title; ?>" name="title" required>
              </div>
               <div class="section-field mb-20">
               <label class="mb-10" for="name">Drug Content </label>
                 <textarea id="content" class="web form-control" style="height:200px;" type="text"  placeholder="" name="content" required><?php echo $drug->content; ?></textarea>
              </div>
           
            <div class="section-field mb-20">
                 <label class="mb-10" for="name">Drug Tags </label>
                  <input id="tags" type="text" placeholder="" class="form-control" value="<?php echo $drug->tags; ?>"  name="tags">
             </div>
             <div class="section-field mb-20">
                 <label class="mb-10" for="name">Drug Image </label>
                  <input id="image" type="file" placeholder="" class="form-control"  name="image">
             </div>
             <div class="section-field mb-20">
                 <label class="mb-10" for="name">Drug Category </label>
                  <input id="category" type="text" placeholder="" class="form-control" value="<?php echo $drug->category; ?>"  name="category" required>
             </div>
             
             
                <button id="submit" name="submit" class="button">
                <span>Edit Drug</span>
                <i class="fa fa-check"></i>
                </button>
          </div>
                </form>
                  <?php } ?>
         </div>
    </div>
   </div>
</section>