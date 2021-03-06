<section class="slider-parallax bitcoin-banner parallax" style="background: url(<?php echo base_url('assets/images/slider-bg.jpg)'); ?>;">
  <div class="slider-content-middle">
  <div class="container">
     <div class="row">
        <div class="col-lg-12 col-md-12">
         <div class="slider-content text-center">
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <div class="bitcoin-banner-content">
                  <div class="tab nav-center">
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="usd" role="tabpanel" aria-labelledby="usd-tab">
                            <div class="bitcoin-price">
                              <h3 class="text-white fw-5">Make your life <span style="color:#f7c605">healthy</span> with herbs and fruits. <br />Save your <span style="color:#f7c605">money</span>.  </h3>
                             
                            </div>
                            <a class="button mt-30 mb-20 mr-0" href="#">Contribute</a>
                            <p class="text-white"> <a class="text-white" href="#"> Tell us your personal experience with healthy products!</a> </p>
                        </div>
                        
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
         </div>
        </div>
     </div>
  </div>
</section>  
 
 <section class="bitcoin-about white-bg page-section-pb">
    <div class="container">
       <div class="row">
         <div class="col-md-12">
           <div class="bitcoin-about-bg">
            <div class="row">
             <div class="col-md-12">
             <form role="form" method="get" action="<?php echo base_url('home/search'); ?>">
                           
            <div id="mc_embed_signup_scroll_2" class="col-md-10 pull-left">
              <input id="search_disease" class="form-control" type="text" placeholder="Enter disease and press enter or submit..." name="search_disease" value="" style="background: rgba(255,255,255,0.4); ">
            </div>
           
            
              <div class="clear col-md-2 pull-right">
                <button name="submit" id="submit" class="button mt-20 form-button" style="background: #ffffff !important; color: #fab41b;margin-top: 0 !important;padding: 13px 40px;">  Submit </button>
              </div>
            </form>
                   </div>
               </div>
               
               </div>
           </div>
         </div>
       </div>
 </section>

<section class="currency-calculator white-bg page-section-pb">
 <div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="section-title text-center">
         <h2 class="">The Most Searched Diseases</h2>
         <p>There are list of most searched diseases in last month. Check it!</p>
      </div>
<div class="col-lg-12 ">
          <div class=" text-black">
               <div class="" data-nav-dots="true" data-items="3" data-md-items="3" data-sm-items="3">
               <?php 
     $j = 0;
     foreach($diseases as $disease) { 
        if(++$j > 3) break; ?>
               <div class="col-lg-4 col-md-4 col-sm-4 xs-mb-30 pull-left">
           <div class="blog-box blog-2 white-bg active">
              <div class="feature-image mb-20">
                 <img alt="" src="<?php echo base_url('images/'.$disease->image); ?>" class="img-fluid">
               </div>
              <div class="blog-info">
                <h4 class="text-black"> <a href="<?=base_url('disease/single/'.$disease->id); ?>"><?php echo $disease->title; ?></a> </h4>
                 
                 <p class="mt-15"><?php echo $disease->excerpt; ?></p>
                 <strong class="theme-color">SUGGESTED DRUG BY SYSTEM</strong>
               
               <h4 class="mt-15 suggested-drugs"><span style="font-weight:600"><a href="<?=base_url('drug/single/'.$disease->suggested_drug); ?>"><?php echo $disease->suggested_drug_title; ?></a></span>  
              
            
              </h4>
                
              </div>
           </div>
         </div>
     <?php } ?>
                </div>
              </div>
             </div> 
    </div>   
  </div>
 
  
 </div>
</section>

<section class="bitcoin-custom-content parallax" style="background: url(<?php echo base_url('assets/images/about-bg.jpg)'); ?>;">
   <div class="container-fluid p-0">
     <div class="row row-eq-height no-gutter">
      <div class="col-lg-6 ">
       </div>
       <div class="col-lg-6 dark-theme-bg">
        <div class="bitcoin-custom-conten-box">
          <div class="section-title">
             <h2 class="text-white">What is <span class="theme-color" style="font-weight:300">Healthy</span>Life?</h2>
             <p class="text-white">Excepteur sint occaecat cupidatat non proident.</p>
           </div>  
           <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
		   Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
           
            <div class="row">
               <div class="col-md-4 col-sm-4 mt-50">
                 <div class="counter text-white">
                    <span class="ti-heart-broken icon" aria-hidden="true"></span>
                    <span class="timer" data-to="234" data-speed="10000"><?php echo $num_of_diseases; ?></span>
                    <label>Different diseases</label>
                  </div>
               </div>
               <div class="col-md-4 col-sm-4 mt-50">
                 <div class="counter text-white">
                    <span class="ti-crown icon" aria-hidden="true"></span>
                    <span class="timer" data-to="1025" data-speed="10000"><?php echo $num_of_drugs; ?></span>
                    <label>Different type of natural drugs</label>
                  </div>
               </div>
               <div class="col-md-4 col-sm-4 mt-50">
                 <div class="counter text-white">
                    <span class="ti-user icon" aria-hidden="true"></span>
                    <span class="timer" data-to="435" data-speed="10000"><?php echo $num_of_users; ?></span>
                    <label>Number of users</label>
                  </div>
               </div>
            </div>
         </div>
       </div>
      </div>
   </div>
</section>

<section class="bitcoin-blog gray-bg page-section-ptb">
   <div class="container">
    <div class="row justify-content-center">
       <div class="col-md-8">
         <div class="section-title text-center">
           <h2>Latest Blog News</h2>
           <p>Taking you from beginner to expert, one article at a time.</p>
          </div>
       </div>
     </div>
     <div class="row">
     <?php 
     $i = 0;
     foreach($blogs as $blog) { 
        if(++$i > 3) break; ?>
       <div class="col-md-4 col-sm-4 xs-mb-30">
         <div class="blog">
           <img class="img-fluid mb-30" src="<?php echo base_url('images/'.$blog->image); ?>" alt="">
            <h3 class="fw-5 mt-10"><a href="<?=base_url('blog/single/'.$blog->id); ?>"><?php echo $blog->title; ?></a></h3>
            <p><?php echo $blog->excerpt; ?></p>
            <div class="admin">
             <span>By admin / <a href="#">Business</a></span>
           </div>
         </div>
       </div>
     <?php } ?>
     </div>
  </div>
</section>