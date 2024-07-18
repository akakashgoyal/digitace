<?php include('function.php');
include('db-conn.php');

if (isset($_GET['job_id'])) {
    $id = $_GET['job_id']; // Retrieve the blog_id from the query parameter
    $query = "DELETE FROM nxte_job WHERE job_id='$id'";

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
    <title>View Job Listed</title>
    <link rel="icon" href="assets/img/icon/nxtelogo.png" type="image/png">
  <?php include('includes/links.php') ?>
  </head>
  <body class="crm_body_bg">
     <?php include('includes/header.php'); ?>
    <section class="main_content dashboard_part large_header_bg">

    <!-- navbar -->
      <?php include('includes/navbar.php'); ?>  

       <div class="main_content_iner overly_inner ">
        <div class="container-fluid p-0 ">
          <div class="row">
            <div class="col-12">
              <div class="page_title_box d-flex align-items-center justify-content-between">
                <div class="page_title_left">
                  <h3 class="f_s_30 f_w_700 text_white">View Job Listed</h3>
                  <ol class="breadcrumb page_bradcam mb-0">
                    <li class="breadcrumb-item">
                      <a href="javascript:void(0);">NXTE</a>
                    </li>
                    <li class="breadcrumb-item">
                      <a href="javascript:void(0);">Job Listed</a>
                    </li>
                    <li class="breadcrumb-item active">View Job Listed</li>
                  </ol>
                </div>
                <a href="add-sub-categories.php" class="white_btn3">Export</a>
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
                                        <h3 class="m-0">Job Listed Table</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">
                                <div class="QA_section">
                                    <div class="white_box_tittle list_header">
                                        
                                        <div class="box_right d-flex lms_block">
                                           
                                            <div class="add_button ms-2">
                                                <a href="add-job.php" data-bs-toggle="modal" data-bs-target="#addcategory"
                                                    class="btn_1">Add New Job </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="QA_table mb_30">
                                        <table class="table lms_table_active ">
                                            <thead>
                                                <tr>
                                                    <th scope="col">S.no</th>
                                                    <th scope="col">Job Id</th>
                                                    <th scope="col">Job Title</th>
                                                    <th scope="col">Job Description</th>
                                                    <th scope="col">Canditate Qualifications</th>
                                                    <th scope="col">Candidate Responsibilities</th>
                                                    <th scope="col">Benefits and Perks</th>
                                                    <th scope="col">Job Type</th>
                                                    <th scope="col">Job Location</th>
                                                    <th scope="col">Salary Range Minimum Annuals</th>
                                                    <th scope="col">Salary Range Maximum Annuals</th>
                                                    <th scope="col">Job Added On</th>
                                                    <th scope="col">Operation</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php echo get_job_listed(); ?>
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
