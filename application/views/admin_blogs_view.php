
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
        
  <!--  <table class="admin-table">
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
              <a href="<?=base_url('admin/delete_blog/'.$blog->id); ?>" rel="tooltip" title="Remove" class="deleteBlog btn btn-danger btn-simple btn-lg">Delete </a>
              <input type="text" name="product_code_delete" id="product_code_delete" value="<?php echo $blog->id; ?>" class="form-control">
              <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
            </td>
        </tr>
    <?php } ?>
    </table>-->
    <?php
        foreach($blogs as $blog) { ?>
          <input type="hidden" name="product_code_delete" id="product_code_delete" value="<?php echo $blog->id; ?>" class="form-control">
         <?php } ?>
    <table class="admin-table" id="mydata">
                <thead>
                <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
                </thead>
                <tbody id="show_blog_data">
                     
                </tbody>
            </table>
           

</div>
</section>

<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>

  <script type='text/javascript'>

 $(document).ready(function(){
show_product();
 function show_product(){
            $.ajax({
                type  : "POST",
                url   : '<?php echo base_url('admin/admin_blogs_ajax'); ?>',    
                dataType : 'json',
                error: function(){
                          alert("ne radi");
                          },
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].id+'</td>'+
                                '<td>'+data[i].title+'</td>'+
                                '<td>'+data[i].date+'</td>'+
                                '<td>'+
                                    '<a href="<?=base_url("blog/single/") ?>'+data[i].id+'" rel="tooltip" title="Remove" class="btn btn-warning btn-simple btn-lg">Read More </a>'+
                                    '<a href="<?=base_url("admin/admin_edit_blog/") ?>'+data[i].id+'" rel="tooltip" title="Remove" class="btn btn-primary btn-simple btn-lg">Edit </a>'+
                                    
                                    '<a href="<?=base_url("admin/delete_blog/") ?>'+data[i].id+'" rel="tooltip" title="Remove" class="deleteBlog btn btn-danger btn-simple btn-lg">Delete </a>'+
                                    
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_blog_data').html(html);
                }
 
            });
        }
});


</script>
 
  <script type='text/javascript'>

 $(document).ready(function(){
  
 $('#btn_delete').on('click',function(){
            var product_code = $('#product_code_delete').val();
            alert("fefe");
            var el = this;
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('admin/delete_blog_ajax')?>",
                dataType : "JSON",
                data : {product_code:product_code},
                success: function(data){
                    alert("Blog Post is deleted.");
                    show_product();
                }
            });
            return false;
        });

});


</script>
