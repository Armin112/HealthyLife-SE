
<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background: url(<?php echo base_url('assets/images/slider-bg.jpg)'); ?>;">
    <div class="container">
      <div class="row"> 
        <div class="col-lg-12"> 
        <div class="page-title-name">
            <h1>All Blogs</h1>
            <p>View or delete blogs on your site.</p>
          </div>
            <ul class="page-breadcrumb">
              <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
              <li><a href="#">All Blogs</a> <i class="fa fa-angle-double-right"></i></li>
             
         </ul>
       </div>
       </div>
    </div>
  </section>
  <section class="main-section">
        <div class="container"> 
            
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
    <div ><a class="button mr-0" href="<?php echo base_url('admin/add_blog'); ?>"  style="padding: 15px 30px;">ADD BLOG</a></div>     
        
    <table class="admin-table">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
        <?php
        foreach($blogs as $blog) { ?>
       <tr >
       <td><?php echo $blog->id; ?></td>
            <td><?php echo $blog->title; ?></td>
            <td><?php echo $blog->date; ?></td>
            <td> 
              <a href="<?=base_url('blog/single/'.$blog->id); ?>" rel="tooltip" title="Remove" class="btn btn-warning btn-simple btn-lg">Read More </a>
              <a href="<?=base_url('admin/admin_edit_blog/'.$blog->id); ?>" rel="tooltip" title="Remove" class="btn btn-primary btn-simple btn-lg">Edit </a>
              <a href="<?=base_url('admin/delete_blog/'.$blog->id); ?>" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-lg">Delete </a>
        </td>
        </tr>
    <?php } ?>
    </table>
  
</div>
</section>