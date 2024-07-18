<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digitace Tech Solutions - Case Studies</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/style.css"> <!-- Custom styles -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <?php include('includes/links.php');?>
</head>
<body>
    <!-- Preloader Start -->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="images/loader.svg" alt=""></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Header -->
    <?php include('includes/header.php'); ?>

    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Case Studies</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home / Case Studies</a></li>

                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

<!-- Case Study Section Start -->
<section class="case-study">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="row">
                    <div class="col-md-6">
                        <div class="case-study-item animated fadeInUp">
                            <img src="images/author-3.jpg" alt="Case Study Image" class="case-study-image">
                            <div class="case-study-details">
                                <div class="case-study-content">
                                    <h2 class="case-study-title">Case Study Title 1</h2>
                                    <p class="case-study-info"><b>Client:</b> Client Name | Industry: Industry Name</p>
                                </div>
                                <div class="case-study-actions">
                                    <a href="case-study-single.php" class="btn btn-primary btn-orange animate__animated animate__heartBeat">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="case-study-item animated fadeInUp">
                            <img src="images/author-3.jpg" alt="Case Study Image" class="case-study-image">
                            <div class="case-study-details">
                                <div class="case-study-content">
                                    <h2 class="case-study-title">Case Study Title 2</h2>
                                    <p class="case-study-info"><b> Client:</b> Client Name | Industry: Industry Name</p>
                                </div>
                                <div class="case-study-actions">
                                    <a href="case-study-single.php" class="btn btn-primary btn-orange animate__animated animate__heartBeat">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Case Study Section End -->




    <!-- Footer -->
 <?php include('includes/footer.php'); ?> 
</body>
</html>