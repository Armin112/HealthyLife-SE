<?php foreach($single_blog as $blog) { ?>
<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background: url(<?php echo base_url('assets/images/slider-bg.jpg)'); ?>">
<div class="container">
    <div class="row"> 
      <div class="col-lg-12"> 
      <div class="page-title-name">
          <h1><?php echo $blog->title; ?></h1>
          
        </div>
          <ul class="page-breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
            <li><a href="#"><?php echo $blog->title; ?></a> <i class="fa fa-angle-double-right"></i></li>
           
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
              <img class="img-fluid" src="<?php echo base_url('assets/images/blog-big-template.jpg'); ?>" alt="">
          </div>
          <div class="blog-detail">
              <div class="entry-meta mb-10">
                  <ul>
               
                      <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                      <li><a href="#"><i class="fa fa-calendar-o"></i> <?php echo $blog->date; ?></a></li>
                  </ul>
              </div>
              <div class="entry-content">
              <?php echo $blog->content; ?>

              <h6 style="margin-top:50px;">  <?php echo $blog->tags; ?></h6>
              </div>
          </div>
       </div>


 <div class="related-work mt-40">
   <div class="row">
    <div class="col-ld-12 col-md-12">
         <h3 class="theme-color mb-20">Related Blog Posts</h3>  
         <div class="" data-nav-dots="false" data-items="2" data-xs-items="1" data-xx-items="1">
         <?php
         $i = 0;
         foreach($blogs as $related_blog) { 
         if(++$i > 3) break;
         ?> 
         <div class="item">
            <div class="blog-box blog-1 active">        
                 <div class="blog-info">
                
                  <h4> <a href="<?=base_url('blog/single/'.$related_blog->id); ?>"> <?php echo $related_blog->title ;?></a></h4>
                  <p><?php echo $related_blog->excerpt ;?></p>
                  <span><i class="fa fa-user"></i> By Admin</span>
                  <span><i class="fa fa-calendar-check-o"></i> <?php echo $related_blog->date ;?> </span>
                  </div>  
                  <div class="blog-box-img" style="background-image:url(<?php echo base_url('assets/images/blog-big-template.jpg)' );?>"></div>
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
                            <a href="<?=base_url('blog/edit_comment/'.$comment->id); ?>"  rel="tooltip" title="Remove" class="comment-button btn-simple"> Edit </a>
                              <a href="<?=base_url('blog/delete_comment/'.$comment->id); ?>"  rel="tooltip" title="Remove" class="comment-button btn-simple">Delete</a>
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
       <div class="col-md-12">
            <p class="logged-as">You are logged in as <?php echo $this->session->userdata('firstname'); ?> <?php echo $this->session->userdata('lastname'); ?>.</p>
        </div> 
         <div class="row">
       
            <div class="login-box pb-50 clearfix white-bg" style="width: 100%; margin: 0 20px;">
           <form role="form" method="post" action="<?php echo base_url('admin/add_comment'); ?>">
           <input type="hidden" name="post_category" class="form-control" placeholder="" value="blog">
           <input type="hidden" name="post_id" class="form-control" placeholder="" value="<?php echo $blog->id; ?>">
           <input type="hidden" name="firstname" class="form-control" placeholder="" value="<?php echo $this->session->userdata('firstname'); ?>">
           <input type="hidden" name="lastname" class="form-control" placeholder="" value="<?php echo $this->session->userdata('lastname'); ?>">  
           <input type="hidden" name="username" class="form-control" placeholder="" value="<?php echo $this->session->userdata('username'); ?>">
           <input type="hidden" name="email" class="form-control" placeholder="" value="<?php echo $this->session->userdata('email'); ?>">   
               
                <div class="section-field mb-20">
                    <label class="mb-10" for="Password">Enter your message </label>
                    <textarea class="form-control" name="message" rows="7"></textarea>
                </div>

                <button id="add_comment" name="add_comment" class="button">
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
        </div> 
      </div>
 <!-- ================================================ -->
     </div> 
    </div>
   </div>
  </section>
<?php } ?>