<?php

	include 'inc/header.php';
	include 'inc/sidebar.php';
	$message ='';
  
	if (isset($_POST['cat_name'])) {

		$message= $blog->saveCategory($_POST);
	}
?>
     
 
         <div class="main-panel">
        <div class="content-wrapper">
          <?php echo $message;?>
          <div class="row">
            <div class="col-md-6 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Add Category</h4>
                      <p class="card-description">
                        Basic form layout
                      </p>
                      <form class="forms-sample" method="post" action="">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Category Name</label>
                          <input type="text" name="cat_name" class="form-control" id="exampleInputEmail1" placeholder="Enter category name">
                        </div>
                        
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                      </form>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
            
           
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <?php include 'inc/footer.php';?>