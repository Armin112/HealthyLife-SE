


<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background: url(<?php echo base_url('assets/images/slider-bg.jpg)'); ?>;">
    <div class="container">
      <div class="row"> 
        <div class="col-lg-12"> 
        <div class="page-title-name">
            <h1>All Users</h1>
            <p>View or delete user on your site.</p>
          </div>
            <ul class="page-breadcrumb">
              <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
              <li><a href="#">All Users</a> <i class="fa fa-angle-double-right"></i></li>
             
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
    <table class="admin-table">
        <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Username</th>
            <th>Email address</th>
            <th>Action</th>
        </tr>
        <?php
        foreach($users as $user) { ?>
       <tr >
       <td><?php echo $user->id; ?></td>
            <td><?php echo $user->firstname; ?></td>
            <td><?php echo $user->lastname; ?></td>
            <td><?php echo $user->username; ?></td>
            <td><?php echo $user->email; ?></td>
            <td> 
                <a href="<?=base_url('admin/delete_user/'.$user->id); ?>" type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-lg">
                Delete
                </a>
        </td>
        </tr>
    <?php } ?>
    </table>
  
</div>
</section>