<?php
  include('admin/db-conn.php');

        $sql="SELECT * FROM digitace_blog ORDER BY id DESC";
        $all_blogs = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.awaikenthemes.com/html-preview/seore/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jul 2024 07:14:29 GMT -->
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Awaiken">
	<!-- Page Title -->
	<title>Digitace - Blog</title>
	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="images/digitacelogo.png">
    <?php include('includes/links.php');?>
    

</head>
<body>

    <!-- Preloader Start -->
	<div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="images/digitacelogo.png" alt=""></div>
		</div>
	</div>
	<!-- Preloader End -->

<?php include('includes/header.php');?>

    <!-- Page Header Start -->
	<div class="page-header parallaxie">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-2" data-cursor="-opaque">Our Blogs</h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="blog.php">home / blog</a></li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->
<?php
    while ($row =mysqli_fetch_assoc($all_blogs)) {
    $blog_image=$row['blog_image'];
?>
    <!-- Page Blog Archive Start -->
    <div class="page-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Blog Item Start -->
                    <div class="blog-item wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image" data-cursor-text="View">
                            <figure>
							<a href="blog.php?id=<?php echo $row['blog_id']; ?>" ><img  src="admin/<?php echo $blog_image; ?>"></a>
                            </figure>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- post Item Content Start -->
                        <div class="post-item-content">
                            <!-- post Item Body Start -->
                            <div class="post-item-body">
                                <h2<a href="blog.php?id=<?php echo $row['blog_id']; ?>"><?php echo $row['blog_title'];?></a></h2>
                                <p><a href="#"><?php echo $row['short_description'];?></a></p>
								<p><a href="#"><?php echo $row['author_name'];?></a></p>
								<p><a href="#"><?php echo $row['added_on'];?></a></p>
                            </div>
                            <!-- Post Item Body End-->

                            <!-- Post Item Footer Start-->
                            <div class="post-item-footer">
                                <a href="#"><img src="images/icon-arrow.svg" alt=""></a>
                            </div>
                            <!-- Post Item Footer End-->
                        </div>
                        <!-- post Item Content End -->
                    </div>
                    <!-- Blog Item End -->
                </div>
            </div>
<?php
	}
?>

            <div class="row">
				<div class="col-md-12">
					<!-- Post Pagination Start -->
					<div class="post-pagination wow fadeInUp" data-wow-delay="0.75s" style="visibility: visible; animation-delay: 0.75s; animation-name: fadeInUp;">
						<ul class="pagination">
							<li><a href="#"><i class="fa-solid fa-arrow-left-long"></i></a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#"><i class="fa-solid fa-arrow-right-long"></i></a></li>
						</ul>
					</div>
					<!-- Post Pagination End -->
				</div>
			</div>
        </div>
    </div>
    <!-- Page Blog Archive End -->

<?php include('includes/footer.php');?>
</body>

<!-- Mirrored from demo.awaikenthemes.com/html-preview/seore/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jul 2024 07:14:29 GMT -->
</html>