<!DOCTYPE html>
<html lang="zxx">

<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Awaiken">
	<!-- Page Title -->
	<title>Digitace - Career</title>
	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="images/digitacelogo.png">
    <?php include('includes/links.php');?>
    <style>
        :root {
            --primary-color: #0E0D1B;
            --secondary-color: #FFF4F3;
            --text-color: #757575;
            --accent-color: #FF4438;
            --gradient-color: #FFBE36;
            --box-shadow-color: #585B631A;
            --white-color: #FFFFFF;
            --divider-color: #FFDCC8;
            --dark-divider-color: #E6E6E6;
            --error-color: rgb(230, 87, 87);
            --default-font: "DM Sans", sans-serif;
        }

        body {
            font-family: var(--default-font);
            background-color: var(--secondary-color);
        }

        .job-card {
            display: flex;
            flex-direction: row;
            align-items: center;
            border: 1px solid var(--divider-color);
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            background-color: var(--white-color);
            transition: box-shadow 0.3s;
            box-shadow: 0 4px 8px var(--box-shadow-color);
        }

        .job-card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .job-details {
            flex: 1;
        }

        .job-title {
            font-size: 24px;
            font-weight: bold;
            color: var(--primary-color);
            margin-bottom: 10px;
        }

        .job-description {
            font-size: 16px;
            color: var(--text-color);
            margin-bottom: 10px;
        }

        .job-requirements {
            font-size: 16px;
            color: var(--text-color);
            margin-bottom: 10px;
        }

        .job-requirements ul {
            padding-left: 20px;
        }

        .job-requirements li {
            list-style: disc;
        }

        .job-apply-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: var(--accent-color);
            color: var(--white-color);
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s;
            cursor: pointer;
        }

        .job-apply-btn:hover {
            background-color: var(--gradient-color);
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: var(--white-color);
            margin: 10% auto;
            padding: 20px;
            border: 1px solid var(--divider-color);
            border-radius: 8px;
            width: 80%;
            max-width: 500px;
            box-shadow: 0 4px 8px var(--box-shadow-color);
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .close {
            color: var(--primary-color);
            font-size: 24px;
            font-weight: bold;
            cursor: pointer;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: var(--primary-color);
        }

        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid var(--divider-color);
            border-radius: 4px;
        }

        .form-group textarea {
            resize: vertical;
        }

        .submit-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: var(--accent-color);
            color: var(--white-color);
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: var(--gradient-color);
        }
    </style>
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
						<h1 class="text-anime-style-2" data-cursor="-opaque">Career Opportunities</h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">home / careers</a></li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

    <!-- Page Job Section Start -->
    <div class="page-project">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
					<!-- Job Card Start -->
					<div class="job-card">
						<div class="job-details">
							<h3 class="job-title">Web Developer</h3>
							<p class="job-description">We are looking for a skilled web developer to join our team. You will be responsible for building and maintaining our websites.</p>
							<p class="job-requirements"><strong>Requirements:</strong></p>
							<ul class="job-requirements">
								<li>Experience with HTML, CSS, JavaScript</li>
								<li>Knowledge of responsive design principles</li>
								<li>Understanding of SEO best practices</li>
							</ul>
						</div>
						<button class="job-apply-btn" data-job="Web Developer">Apply Now</button>
					</div>
					<!-- Job Card End -->

					<!-- Job Card Start -->
					<div class="job-card">
						<div class="job-details">
							<h3 class="job-title">Digital Marketing Specialist</h3>
							<p class="job-description">Join our team as a Digital Marketing Specialist to help us enhance our online presence and drive more traffic to our websites.</p>
							<p class="job-requirements"><strong>Requirements:</strong></p>
							<ul class="job-requirements">
								<li>Proven experience in digital marketing</li>
								<li>Expertise in SEO, SMM, and PPC</li>
								<li>Strong analytical skills</li>
							</ul>
						</div>
						<button class="job-apply-btn" data-job="Digital Marketing Specialist">Apply Now</button>
					</div>
					<!-- Job Card End -->

					<!-- Job Card Start -->
					<div class="job-card">
						<div class="job-details">
							<h3 class="job-title">Content Writer</h3>
							<p class="job-description">We need a creative Content Writer to craft compelling and engaging content for our blog, social media, and marketing materials.</p>
							<p class="job-requirements"><strong>Requirements:</strong></p>
							<ul class="job-requirements">
								<li>Excellent writing and editing skills</li>
								<li>Ability to meet deadlines</li>
								<li>Experience with content management systems</li>
							</ul>
						</div>
						<button class="job-apply-btn" data-job="Content Writer">Apply Now</button>
					</div>
					<!-- Job Card End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Job Section End -->

    <!-- Modal Start -->
    <div id="jobModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Apply for <span id="jobTitle"></span></h2>
                <span class="close">&times;</span>
            </div>
            <div class="modal-body">
                <form id="jobForm" action="apply.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="job_title" id="hiddenJobTitle">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="cover_letter">Cover Letter</label>
                        <textarea id="cover_letter" name="cover_letter" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="resume">Upload Resume</label>
                        <input type="file" id="resume" name="resume" accept=".pdf, .doc, .docx" required>
                    </div>
                    <button type="submit" class="submit-btn">Submit Application</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal End -->

<?php include('includes/footer.php'); ?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var modal = document.getElementById("jobModal");
        var jobTitleElement = document.getElementById("jobTitle");
        var hiddenJobTitleElement = document.getElementById("hiddenJobTitle");
        var applyButtons = document.querySelectorAll('.job-apply-btn');
        var closeModalButton = document.querySelector('.modal .close');

        applyButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                var jobTitle = button.getAttribute('data-job');
                jobTitleElement.textContent = jobTitle;
                hiddenJobTitleElement.value = jobTitle;
                modal.style.display = "block";
            });
        });

        closeModalButton.addEventListener('click', function () {
            modal.style.display = "none";
        });

        window.addEventListener('click', function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        });
    });
</script>

</body>

</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $job_title = $_POST['job_title'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $cover_letter = $_POST['cover_letter'];
    $resume = $_FILES['resume'];

    // Directory where the resume will be saved
    $uploadDir = 'uploads/';
    $uploadFile = $uploadDir . basename($resume['name']);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));

    // Check if file is a valid resume format
    if ($fileType != "pdf" && $fileType != "doc" && $fileType != "docx") {
        echo "Sorry, only PDF, DOC & DOCX files are allowed.";
        $uploadOk = 0;
    }

    // Check file size (limit to 5MB)
    if ($resume['size'] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // If everything is ok, try to upload file
    if ($uploadOk == 1) {
        if (move_uploaded_file($resume['tmp_name'], $uploadFile)) {
            echo "The file " . htmlspecialchars(basename($resume['name'])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Here you can implement the logic to save the form data to a database or send an email
    // For now, we will just display the submitted information

    echo "<h1>Application Received</h1>";
    echo "<p>Thank you for applying for the position of <strong>$job_title</strong>.</p>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Cover Letter:</strong> $cover_letter</p>";
    echo "<p><strong>Resume:</strong> <a href='$uploadFile' target='_blank'>" . htmlspecialchars(basename($resume['name'])) . "</a></p>";
}
?>
