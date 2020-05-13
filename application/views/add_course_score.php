<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Add Course Score</title>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?=base_url()?>assets/css/styles.css" rel="stylesheet" />
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?=base_url()?>">Logo</a><button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?=base_url()?>">Home</a></li>
				<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?=base_url()?>welcome/add_new_student">Add New Student</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?=base_url()?>welcome/add_new_course">Add New Course</a></li>
            </ul>
        </div>
    </div>
</nav>


<!-- course score-->
<section class="page-section" id="contact">
    <div class="container">
		<?php if ($message != ''){ ?>
		<div class="alert alert-primary alert-dismissible fade show" role="alert">
			<strong>successs!</strong> <?= $message ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		</div>
		<?php } ?>
        <!-- course score Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">add course score</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- course score Form-->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                <form id="contactForm" name="sentMessage" novalidate="novalidate" method="post" action="">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label style="top:0;opacity:1">Select student</label>
                            <select name="student" class="form-control">
								<?php if(($students)) { foreach($students as $row) {  ?>
									<option value="<?=$row['student_id']?>"><?= $row['student_name'] ?></option>
								<?php }}else{?>
                                	<option>Please add one student</option>
								<?php }?>
                            </select>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label style="top:0;opacity:1">Select course</label>
                            <select name="course" class="form-control">
								<?php if(($courses)) { foreach($courses as $row) {  ?>
                                	<option value="<?=$row['course_id']?>"><?= $row['course_name'] ?></option>
								<?php }}else{?>
									<option>Please add one course</option>
								<?php }?>
                            </select>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Score</label>
                            <input name="score" class="form-control" id="score" type="tel" placeholder="score" required="required" data-validation-required-message="Please enter valid score." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <br />
                    <div id="success"></div>
                    <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Send</button></div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Footer-->
<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <!-- Footer Location-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Location</h4>
                <p class="lead mb-0">2215 John Daniel Drive<br />Clark, MO 65243</p>
            </div>
            <!-- Footer Social Icons-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Around the Web</h4>
                <a class="btn btn-outline-light btn-social mx-1" href="#"><i class="fab fa-fw fa-facebook-f"></i></a><a class="btn btn-outline-light btn-social mx-1" href="#"><i class="fab fa-fw fa-twitter"></i></a><a class="btn btn-outline-light btn-social mx-1" href="#"><i class="fab fa-fw fa-linkedin-in"></i></a><a class="btn btn-outline-light btn-social mx-1" href="#"><i class="fab fa-fw fa-dribbble"></i></a>
            </div>
            <!-- Footer About Text-->
            <div class="col-lg-4">
                <h4 class="text-uppercase mb-4">About Freelancer</h4>
                <p class="lead mb-0">Freelance is a free to use, MIT licensed Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
            </div>
        </div>
    </div>
</footer>
<!-- Copyright Section-->
<section class="copyright py-4 text-center text-white">
    <div class="container"><small>Copyright © 2020</small></div>
</section>
<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
<div class="scroll-to-top d-lg-none position-fixed">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
</div>

<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->
<script src="<?=base_url()?>assets/mail/jqBootstrapValidation.js"></script>
<script src="<?=base_url()?>assets/mail/contact_me.js"></script>
<!-- Core theme JS-->
<script src="<?=base_url()?>assets/js/scripts.js"></script>
</body>
</html>
