<?php

session_start();
if (!isset($_SESSION['adminloginid'])) {
  header("location:index.php");
  exit;
}

?>
<!DOCTYPE html>
<html lang="zxx">
  <!-- Mirrored from demo.dashboardpack.com/sales-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Apr 2023 14:07:06 GMT -->
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="assets/img/icon/nxtelogo.png" type="image/x-icon">
    <title>Dashboard</title> 
    <?php include('includes/links.php') ?>
  </head>
  <body class="crm_body_bg">


     <?php include('includes/header.php') ?>
   
    <section class="main_content dashboard_part large_header_bg">
     <?php include('includes/navbar.php'); ?>
      <div class="main_content_iner overly_inner ">
        <div class="container-fluid p-0 ">
          <div class="row">
            <div class="col-12">
              <div class="page_title_box d-flex align-items-center justify-content-between">
                <div class="page_title_left">
                  <h3 class="f_s_30 f_w_700 text_white">Dashboard</h3>
                  <ol class="breadcrumb page_bradcam mb-0">
                    <li class="breadcrumb-item">
                      <a href="javascript:void(0);">NXTE</a>
                    </li>
                    <li class="breadcrumb-item">
                      <a href="javascript:void(0);">Dashboard</a>
                    </li>
                    
                  </ol>
                </div>
                <a href="../index.php" class="white_btn3">View Site</a>
              </div>
            </div>
          </div>
          <div class="row ">
           
<!-- put here anything -->

          </div>
        </div>
      </div>
      <?php include('includes/footer.php')?>
      