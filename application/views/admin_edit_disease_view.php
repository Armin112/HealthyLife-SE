<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background: url(<?php echo base_url('assets/images/slider-bg.jpg)'); ?>;">
<div class="container">
    <div class="row"> 
      <div class="col-lg-12"> 
      <div class="page-title-name">
          <h1>Edit Disease</h1>
          <p>Edit disease in you system.</p>
        </div>
          <ul class="page-breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
            <li><a href="#">Edit Disease</a> <i class="fa fa-angle-double-right"></i></li>
           
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
                  <?php foreach($single_disease as $disease) { ?>
        <form role="form" method="post" action="<?php echo base_url('admin/edit_disease/'.$disease->id); ?>">
        <input id="id" class="web form-control" type="hidden" value="<?php echo $disease->id; ?>" placeholder="" name="id" required>
             <div class="section-field mb-20">
               <label class="mb-10" for="name">Disease Title </label>
                 <input id="title" class="web form-control" type="text" placeholder="" value="<?php echo $disease->title; ?>" name="title" required>
              </div>
               <div class="section-field mb-20">
               <label class="mb-10" for="name">Disease Content </label>
                 <textarea id="content" class="web form-control" style="height:200px;" type="text"  placeholder="" name="content" required><?php echo $disease->content; ?></textarea>
              </div>
           
            <div class="section-field mb-20">
                 <label class="mb-10" for="name">Disease Tags </label>
                  <input id="tags" type="text" placeholder="" class="form-control" value="<?php echo $disease->tags; ?>"  name="tags">
             </div>
             <div class="section-field mb-20">
                 <label class="mb-10" for="name">Disease Image </label>
                  <input id="image" type="file" placeholder="" class="form-control"  name="image">
             </div>
            <div class="section-field mb-20">
            <label class="mb-10" for="name">Select drug which is recommended for this disease by your system </label>
                <select class="form-control" id="suggested_drug" name="suggested_drug" style="height: unset;">
                    <option value="<?php echo $disease->suggested_drug; ?>"><?php echo $disease->suggested_drug; ?></option>
                    <option value="drug 1">Drug 1</option> 
                </select>
               
             </div>
             
                <button id="submit" name="submit" class="button">
                <span>Edit Disease</span>
                <i class="fa fa-check"></i>
                </button>
          </div>
                </form>
                  <?php } ?>
         </div>
    </div>
   </div>
</section>