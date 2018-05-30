<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(images/bg/02.jpg);">
  <div class="container">
    <div class="row"> 
      <div class="col-lg-12"> 
      <div class="page-title-name">
          <h1>Search results for:</h1>
          <p><?php echo $query_parameter; ?></p>
        </div>
          <ul class="page-breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span><?php echo $query_parameter; ?></span> </li>
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
    <?php  
     foreach($diseases as $disease) { 
       ?>
               <div class="col-lg-4 col-md-4 col-sm-4 xs-mb-30 pull-left">
           <div class="blog-box blog-2 white-bg active">
              <div class="feature-image mb-20">
                 <img alt="" src="<?php echo base_url('assets/images/empty-template.jpg'); ?>" class="img-fluid">
               </div>
              <div class="blog-info">
                <h4 class="text-black"> <a href="<?=base_url('disease/single/'.$disease->id); ?>"><?php echo $disease->title; ?></a> </h4>
                 
                 <p class="mt-15"><?php echo $disease->excerpt; ?></p>
                 <strong class="theme-color">SUGGESTED DRUG BY SYSTEM</strong>
          
               <h4 class="mt-15 suggested-drugs"><span style="font-weight:600"><a href="<?=base_url('drug/single/'.$disease->suggested_drug); ?>"><?php echo $disease->suggested_drug_title; ?></a></span>  
               
                <button><span class="unlike empty">345</span></button>
                <button><span class="unlike full">345</span></button>

                <button><span class="like empty">345</span></button> 
                <button><span class="like full">345</span></button>  
               
               
              </h4>
                
              </div>
           </div>
         </div>
     <?php } ?>
    </div>


  
  </div>
 </section>