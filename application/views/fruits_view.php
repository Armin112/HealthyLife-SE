<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(images/bg/02.jpg);">
  <div class="container">
    <div class="row"> 
      <div class="col-lg-12"> 
      <div class="page-title-name">
          <h1>Fruits</h1>
          <p>Best fruits for you and your body. Find it here.</p>
        </div>
          <ul class="page-breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
            <li><a href="#">Categories</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span>Fruits</span> </li>
       </ul>
     </div>
     </div>
  </div>
</section>

<!--=================================
page-title -->


<!--=================================
 Blog-->

<section class="blog blog-grid-3-column white-bg page-section-ptb">
  <div class="container">
    <div class="row">
    <?php foreach($fruits as $fruit) {  ?>
     <div class="col-lg-4 col-md-4" style="margin-bottom: 20px;">
        <div class="blog-box blog-2 white-bg active">
            <div class="feature-image mb-20">
               <img alt="" src="<?php echo base_url('assets/images/empty-template.jpg'); ?>" class="img-fluid">
             </div>
            <div class="blog-info">
              <h4 class="text-black"> <a href="<?=base_url('drug/single/'.$fruit->id); ?>"> <?php echo $fruit->title ;?> </a> </h4>
              
               <p class="mt-15"> <?php echo $fruit->excerpt ;?></p>
			 
			
            </div>
         </div>
 
      </div>        
    <?php } ?>
    </div>


  <div class="row"> 
  <div class="col-lg-12 col-lg-12" style="margin-bottom: 20px;">
      <div class="entry-pagination">
        <nav aria-label="Page navigation example text-center">
            <ul class="pagination justify-content-center">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
      </div>
    </div>
   </div>
<!-- ================================================ -->
  </div>
 </section>