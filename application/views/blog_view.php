<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background: url(<?php echo base_url('assets/images/slider-bg.jpg)'); ?>">
  <div class="container">
    <div class="row"> 
      <div class="col-lg-12"> 
      <div class="page-title-name">
          <h1>blog</h1>
          <p>Read something interesting about medicine.</p>
        </div>
          <ul class="page-breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
            <li><a href="#">Blog</a> <i class="fa fa-angle-double-right"></i></li>
           
       </ul>
     </div>
   </div>
  </div>
</section>

<!--=================================
page-title -->


<!--=================================
 blog timeline-->

<section class="white-bg blog"> 
 <div class="container">
   <div class="row">
     <div class="container">
    <ul class="timeline">
    <?php foreach($blogs as $blog) {  ?>
        <li>
          
          <div class="timeline-panel">
           <div class="blog-entry">
          <div class="entry-image clearfix">
              <img class="img-fluid" src="<?php echo base_url('assets/images/empty-template.jpg'); ?>" alt="">
          </div>
          <div class="blog-detail">
              <div class="entry-title mb-10">
                  <a href="<?=base_url('blog/single/'.$blog->id); ?>"><?php echo $blog->title ;?></a>
              </div>
              <div class="entry-meta mb-10">
                  <ul>
                    
                      <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                      <li><a href="#"><i class="fa fa-calendar-o"></i> <?php echo $blog->date ;?></a></li>
                  </ul>
              </div>
              <div class="entry-content">
                  <p><?php echo $blog->excerpt ;?>...</p>
              </div>
              <div class="entry-share clearfix">
                  <div class="entry-button">
                      <a class="button arrow" href="<?=base_url('blog/single/'.$blog->id); ?>">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </div>
                 
              </div>
          </div>
      </div>
          </div>
        </li>
    <?php } ?>
 <!-- =========================================== -->
       <li class="clearfix" style="float: none;"></li>
     </ul>
   </div>
  </div>
 </div>  
</section>