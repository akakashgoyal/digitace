
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
    <link rel="icon" href="assets/img/icon/logo.png" type="image/png">
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
              <div class="page_title_box d-flex align-items-center justify-content-between bg-custom">
                <div class="page_title_left">
                  <h3 class="f_s_30 f_w_700 text_white">Add Service</h3>
                  <ol class="breadcrumb page_bradcam mb-0">
                    <li class="breadcrumb-item">
                      <a href="javascript:void(0);">NXTE </a>
                    </li>
                    <li class="breadcrumb-item">
                      <a href="javascript:void(0);">Service</a>
                    </li>
                    <li class="breadcrumb-item active">Add Service</li>
                  </ol>
                </div>
                <a href="view-categories.php" class="white_btn3">View Services</a>
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
                                        <h3 class="m-0">Fill all the Service details</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">
                                <div class="card-body">
                                    <form action="function.php" method="POST">
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label class="form-label" for="inputEmail4">Service Name</label>
                                                <input type="text" class="form-control" name="cate_name" id="categoryname"
                                                    placeholder="Name">
                                            </div>  
                                            <div class="col-md-6 mb-3 ">
                                                <label class="form-label" for="inputEmail4">Meta Title</label>
                                                <input type="text" class="form-control" name="meta_title"  id="inputEmail4"
                                                    placeholder="Meta Title">
                                            </div>   
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="inputEmail4">Meta Keyword</label>
                                                <input type="text" class="form-control" name="meta_key"  id="categoryname"
                                                    placeholder="Meta Keyword">
                                            </div>  
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="inputEmail4">Meta description</label>
                                                <input type="text" class="form-control" name="meta_desc" id="inputEmail4"
                                                    placeholder="Meta Description">
                                            </div> 
                                        </div>
                                        <button type="submit" name="add-categories" class="btn btn-primary">Add Service</button>
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