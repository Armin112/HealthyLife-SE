<?php foreach($single_disease as $disease) { ?>
<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background: url(<?php echo base_url('assets/images/slider-bg.jpg)'); ?>">
<div class="container">
    <div class="row"> 
      <div class="col-lg-12"> 
      <div class="page-title-name">
          <h1><?php echo $disease->title; ?></h1>
          
        </div>
          <ul class="page-breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
            <li><a href="#"><?php echo $disease->title; ?></a> <i class="fa fa-angle-double-right"></i></li>
           
       </ul>
     </div>
     </div>
  </div>
</section>

<section class="blog blog-single white-bg page-section-ptb">
  <div class="container">
    <div class="row">
    
<!-- ========================== -->
   <div class="col-lg-12">
       <div class="blog-entry mb-10">
            <div class="entry-image clearfix">
              <img class="img-fluid" src="<?php echo base_url('/images/'.$disease->image); ?>" alt="">
          </div>
          <div class="blog-detail">
              <div class="entry-meta mb-10">
                  <ul>
               
                      <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                      <li><a href="#"><i class="fa fa-calendar-o"></i> <?php echo $disease->date; ?></a></li>
                  </ul>
              </div>
              <div class="entry-content">
              <?php echo $disease->content; ?>

              <h6 style="margin-top:50px;">  <?php echo $disease->tags; ?></h6>
              </div>
          </div>
       </div>

		   <div class="port-post clearfix mt-40">
      <strong class="theme-color" style="font-size:20px; margin-bottom:20px;font-size: 20px;float: left;width: 100%;border-bottom: 1px solid;">SUGGESTED DRUGS</strong>
        <div class="port-post-info" style="padding-left:10px;">
        
			 <h4 class="mt-15" style="border-bottom:1px solid #e8e5e5;margin-bottom: 20px;float: left;width: 100%; padding-bottom:5px;"><span style="font-weight:600"><a href="#">
			 Drug 1</a></span> <span style="float:right; font-weight:400">350 <i class="fa fa-heart" style="margin-right:15px; color:#f7c605"></i>4
			 <i class="fa fa-heart-o" style=" color:#f7c605"></i></span> </h4>
			  <h4 class="mt-15" style="border-bottom:1px solid #e8e5e5;margin-bottom: 20px;float: left;width: 100%; padding-bottom:5px;"><span style="font-weight:600"><a href="#">
			 Drug 2</a></span> <span style="float:right; font-weight:400">320 <i class="fa fa-heart" style="margin-right:15px; color:#f7c605"></i>15
			 <i class="fa fa-heart-o" style=" color:#f7c605"></i></span> </h4>
			  <h4 class="mt-15" style="border-bottom:1px solid #e8e5e5;margin-bottom: 20px;float: left;width: 100%; padding-bottom:5px;"><span style="font-weight:600"><a href="#">
			 Drug 3</a></span> <span style="float:right; font-weight:400">250 <i class="fa fa-heart" style="margin-right:15px; color:#f7c605"></i>21
			 <i class="fa fa-heart-o" style=" color:#f7c605"></i></span> </h4>
        </div>
      </div>
		 
		
			    
			 
			 
  


 <div class="related-work mt-40">
   <div class="row">
    <div class="col-ld-12 col-md-12">
         <h3 class="theme-color mb-20">Related Diseases</h3>  
         <div class="" data-nav-dots="false" data-items="2" data-xs-items="1" data-xx-items="1">
         <?php
         $i = 0;
         foreach($diseases as $related_disease) { 
         if(++$i > 3) break;
         ?> 
         <div class="item">
            <div class="blog-box blog-1 active">        
                 <div class="blog-info">
                
                  <h4> <a href="<?=base_url('disease/single/'.$related_disease->id); ?>"> <?php echo $related_disease->title ;?></a></h4>
                  <p><?php echo $related_disease->excerpt ;?></p>
                  <span><i class="fa fa-user"></i> By Admin</span>
                  <span><i class="fa fa-calendar-check-o"></i> <?php echo $related_disease->date ;?> </span>
                  </div>  
                  <div class="blog-box-img" style="background-image:url(<?php echo base_url('images/'.$related_disease->image.')' );?>"></div>
                </div>
            </div>
         <?php } ?>
           
        </div>
       </div>
      </div>
     </div>
 <!-- ================================================ -->
  <div class="blog-comments mt-40">
  <?php 
  if($comments != null)
  {
  foreach($comments as $comment) { ?>    
    <div class="comments-1">
         <div class="comments-photo">
           <img class="img-fluid" src="<?php echo base_url('assets/images/person-template.jpg'); ?>" alt="">
          </div>
           <div class="comments-info">
           <h4 class="theme-color"> <?php echo $comment->firstname." ". $comment->lastname; ?> <span><?php echo $comment->date ?></span></h4>
           <div class="port-post-social float-right">
                            <a href="<?=base_url('disease/edit_comment/'.$comment->id); ?>"  rel="tooltip" title="Remove" class="comment-button btn-simple"> Edit </a>
                              <a href="<?=base_url('disease/delete_comment/'.$comment->id); ?>"  rel="tooltip" title="Remove" class="comment-button btn-simple">Delete</a>
                           </div>
              <p><?php echo $comment->message; ?></p>
         </div>
         </div>
  <?php } } ?>
        
       
      </div>
  </div>
 <!-- ================================================ -->
<br/>
 <div class="row" style="width:100%">
       <div class="col-lg-12 col-md-12">
       <h3 class="theme-color mb-30">Leave a Reply </h3>
       <?php
        $id=$this->session->userdata('id');
        if($id){
        ?>
       <div class="col-md-12">
            <p class="logged-as">You are logged in as <?php echo $this->session->userdata('firstname'); ?> <?php echo $this->session->userdata('lastname'); ?>.</p>
        </div> 
         <div class="row">
         
            <div class="login-box pb-50 clearfix white-bg" style="width: 100%; margin: 0 20px;">
           <form role="form" method="post" action="<?php echo base_url('admin/add_comment'); ?>">
           <input type="hidden" name="post_category" class="form-control" placeholder="" value="disease">
           <input type="hidden" name="post_id" class="form-control" placeholder="" value="<?php echo $disease->id; ?>">
           <input type="hidden" name="firstname" class="form-control" placeholder="" value="<?php echo $this->session->userdata('firstname'); ?>">
           <input type="hidden" name="lastname" class="form-control" placeholder="" value="<?php echo $this->session->userdata('lastname'); ?>">  
           <input type="hidden" name="username" class="form-control" placeholder="" value="<?php echo $this->session->userdata('username'); ?>">
           <input type="hidden" name="email" class="form-control" placeholder="" value="<?php echo $this->session->userdata('email'); ?>">   
               
                <div class="section-field mb-20">
                    <label class="mb-10" for="Password">Enter your message </label>
                    <textarea class="form-control" name="message" rows="7"></textarea>
                </div>

                <button id="post" name="login" class="button">
                <span>Post Comment</span>
                <i class="fa fa-check"></i>
                </button> 
            </form>
            </div>
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
           </div> 
                <?php }
              else {  
              ?>
                 <div class="col-md-12">
            <p class="logged-as">Only registered users can post a comment.</p>
        </div> 
              <?php } ?> 
        </div> 
      </div>
 <!-- ================================================ -->
     </div> 
    </div>
   </div>
  </section>
<?php } ?>