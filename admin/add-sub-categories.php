<?php include('db-conn.php'); 
$sql="SELECT * FROM digitace_category ORDER BY id DESC";
     $check = mysqli_query($conn,$sql);
    
?>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
  <!-- Mirrored from demo.dashboardpack.com/sales-html/Layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Apr 2023 14:08:09 GMT -->
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Add Categories</title>
    <link rel="icon" href="assets/img/icon/nxtelogo.png" type="image/png">
  <?php include('includes/links.php') ?>
  </head>
  <body class="crm_body_bg">
     <?php include('includes/header.php'); ?>
    <section class="main_content dashboard_part large_header_bg">
      <?php include('includes/navbar.php'); ?>
       <div class="main_content_iner overly_inner ">
        <div class="container-fluid p-0 ">
          <div class="row">
            <div class="col-12">
              <div class="page_title_box d-flex align-items-center justify-content-between">
                <div class="page_title_left">
                  <h3 class="f_s_30 f_w_700 text_white">Add Sub Category</h3>
                  <ol class="breadcrumb page_bradcam mb-0">
                    <li class="breadcrumb-item">
                      <a href="javascript:void(0);">Digitace</a>
                    </li>
                    <li class="breadcrumb-item">
                      <a href="javascript:void(0);">Services</a>
                    </li>
                    <li class="breadcrumb-item active">Add Sub Service</li>
                  </ol>
                </div>
                <a href="view-sub-categories.php" class="white_btn3">view Sub Services</a>
              </div>
            </div>
          </div>
          <div class="row ">
           
<!-- put here anything -->
<div class="main_content_iner ">
            <div class="container-fluid p-0 sm_padding_15px">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="white_card card_height_100 mb_30">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Fill all the sub catrgories details</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">
                                <div class="card-body">
                                    <form action="function.php" method="POST">
                                        
                                        <div class="row mb-3">
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="inputEmail4">Services</label>
                                                <select name="parent_id" class="form-control">
                                                    <option>--select--</option>
                                                <?php foreach ($check as $val) {?>
                                                    <option value="<?php echo $val['cate_id'] ?>"><?php echo ucwords($val['cate_name']) ?></option>

                                               <?php }?>
                                               </select>
                                            </div> 
                                            <div class="col-md-6">
                                                <label class="form-label" for="inputEmail4">Sub Service Title</label>
                                                <input type="text" class="form-control" name="Sub_Service_Title" id="categoryname"
                                                    placeholder="Sub Service Title">
                                            </div> 
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="inputEmail4">Model Image 1</label>
                                                <input type="file" class="form-control" name="model_image2"  
                                                    placeholder="Model Image">
                                            </div> 
                                             <div class="col-md-6 mb-3 ">
                                                <label class="form-label" for="inputEmail4">First Heading</label>
                                                <input type="text" class="form-control" name="first_heading"  id="inputEmail4"
                                                    placeholder="First Heading">
                                            </div>                              
                                             <div class="col-md-12 mb-3 ">
                                                <label class="form-label" for="inputEmail4">First Description</label>
                                                <input type="textarea" class="form-control" name="first_description"  id="inputEmail4"
                                                    placeholder="First Description">
                                            </div>               
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="inputEmail4">Model Image 2</label>
                                                <input type="file" class="form-control" name="model_image2"  
                                                    placeholder="Model Image">
                                            </div>  
                                            <div class="col-md-6 mb-6 ">
                                                <label class="form-label" for="inputEmail4">Second Heading</label>
                                                <input type="text" class="form-control" name="second_heading"  id="inputEmail4"
                                                    placeholder="Second Heading">
                                            </div> 
                                            <div class="col-md-12 mb-6 ">
                                                <label class="form-label" for="inputEmail4">Second Description</label>
                                                <input type="textarea" class="form-control" name="second_description"  id="inputEmail4"
                                                    placeholder="Second Description">
                                            </div>  
                                            
                                            <div class="col-md-12 mb-6 ">
                                              <br>
                                                <label class="form-label" for="inputEmail4">Third Description</label>
                                                <input type="textarea" class="form-control" name="third_description"  id="inputEmail4"
                                                    placeholder="Third Description">
                                            </div>  
                                           
                                            <div class="col-md-12 mb-6">
                                              <br>
                                               <h5 style="text-align:center">FAQs</h5>
                                                
                                            </div>  
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="inputEmail4">First Question</label>
                                                <input type="text" class="form-control" name="first_question"  id="categoryname"
                                                    placeholder="First Question">
                                            </div>  
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="inputEmail4">First Answer</label>
                                                <input type="text" class="form-control" name="first_answer" id="inputEmail4"
                                                    placeholder="First Answer">
                                            </div> 
                                             <div class="col-md-6 mb-3">
                                                <label class="form-label" for="inputEmail4">Second Question</label>
                                                <input type="text" class="form-control" name="second_question"  id="categoryname"
                                                    placeholder="Second Question">
                                            </div>  
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="inputEmail4">Second Answer</label>
                                                <input type="text" class="form-control" name="second_answer" id="inputEmail4"
                                                    placeholder="Second Answer">
                                            </div> 
                                             <div class="col-md-6 mb-3">
                                                <label class="form-label" for="inputEmail4">Third Question</label>
                                                <input type="text" class="form-control" name="third_question"  id="categoryname"
                                                    placeholder="Third Question">
                                            </div>  
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="inputEmail4">Third Answer</label>
                                                <input type="text" class="form-control" name="third_answer" id="inputEmail4"
                                                    placeholder="Third Answer">
                                            </div> 
                                             <div class="col-md-6 mb-3">
                                                <label class="form-label" for="inputEmail4">Fourth Question</label>
                                                <input type="text" class="form-control" name="fourth_question"  id="categoryname"
                                                    placeholder="Fourth Question">
                                            </div>  
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="inputEmail4">Fourth Answer</label>
                                                <input type="text" class="form-control" name="fourth_answer" id="inputEmail4"
                                                    placeholder="Fourth Answer">
                                            </div> 
                                              <div class="col-md-6 mb-3">
                                                <label class="form-label" for="inputEmail4">Fifth Question</label>
                                                <input type="text" class="form-control" name="fifth_question"  id="categoryname"
                                                    placeholder="Fifth Question">
                                            </div>  
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="inputEmail4">Fifth Answer</label>
                                                <input type="text" class="form-control" name="fifth_answer" id="inputEmail4"
                                                    placeholder="Fifth Answer">
                                            </div> 
                                            
                                        </div>
                                        <button type="submit" name="add-sub-categories" class="btn btn-primary">Add Sub Category</button>
                                    </form>
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
      <?php include('includes/footer.php'); ?>