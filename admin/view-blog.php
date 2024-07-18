<?php include('function.php'); 
// delete-blog.php
include('db-conn.php');

if (isset($_GET['blog_id'])) {
    $id = $_GET['blog_id']; // Retrieve the blog_id from the query parameter
    $query = "DELETE FROM digitace_blog WHERE blog_id='$id'";

    $delete = mysqli_query($conn, $query);

    if ($delete) {
        echo "Blog entry with ID $id has been successfully deleted.";
    } else {
        echo "Error deleting blog entry: " . mysqli_error($conn);
    }
}


?>

<!DOCTYPE html>
<html lang="zxx">
  <!-- Mirrored from demo.dashboardpack.com/sales-html/Layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Apr 2023 14:08:09 GMT -->
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>View Blog</title>
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
                  <h3 class="f_s_30 f_w_700 text_white">View Blog</h3>
                  <ol class="breadcrumb page_bradcam mb-0">
                    <li class="breadcrumb-item">
                      <a href="javascript:void(0);">Digitace</a>
                    </li>
                    <li class="breadcrumb-item">
                      <a href="javascript:void(0);">Blog</a>
                    </li>
                    <li class="breadcrumb-item active">View Blogs</li>
                  </ol>
                </div>
                <a href="add-blog.php" class="white_btn3">Add New Blog</a>
              </div>
            </div>
          </div>
          <div class="row ">
           
<!-- put here anything -->
 <!-- Data tables start -->
      <div class="main_content_iner ">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="white_card card_height_100 mb_30">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Blog Table</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">
                                <div class="QA_section">
                                    <div class="white_box_tittle list_header">
                                        
                                        <div class="box_right d-flex lms_block">
                                           
                                            <div class="add_button ms-2">
                                                <a href="add-blog.php" data-bs-toggle="modal" data-bs-target="#addcategory"
                                                    class="btn_1">Add New Blog</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="QA_table mb_30">
                                        <table class="table lms_table_active ">
                                            <thead>
                                                <tr>
                                                    <th scope="col">S.no</th>
                                                    <th scope="col">Blog ID</th>
                                                    <th scope="col">Blog Title</th>
                                                    <th scope="col">Author Name</th>
                                                    <th scope="col">Short Description</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Blog Image</th>
                                                    <th scope="col">Blog Date</th>
                                                    <th scope="col">Operation</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php echo get_blogs(); ?>  
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12"></div>
                </div>
            </div>
        </div>



<!-- Data table end -->

          </div>
        </div>
      </div>
    
     
      <?php include('includes/footer.php'); ?>
