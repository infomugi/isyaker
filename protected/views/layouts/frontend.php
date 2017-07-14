<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo CHtml::encode($this->pageTitle); ?> - <?php echo CHtml::encode(Yii::app()->name); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="BPS - Badan Pusat Statistik">
	<meta name="author" content="Mugi Rachmat">

	<?php
	$baseUrl = Yii::app()->theme->baseUrl; 
	$cs = Yii::app()->getClientScript();
	Yii::app()->clientScript->registerCoreScript('jquery');
	?>
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/frontend/css/app.min.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/frontend/css/custom.css" rel="stylesheet">
	<link rel="shortcut icon" href="./dokumen/favicon/<?php echo Yii::app()->db->createCommand("SELECT favicon FROM settings where id_settings=1")->queryScalar(); ?>">

</head>

<body>

	<body class="nav-on-header">

		<!-- Navigation bar -->
		<nav class="navbar">
			<div class="container">

				<!-- Logo -->
				<div class="pull-left">
					<a class="navbar-toggle" href="#" data-toggle="offcanvas"><i class="ti-menu"></i></a>

					<div class="logo-wrapper">
						<a class="logo" href=""><img src="<?php echo Yii::app()->theme->baseUrl; ?>/frontend/img/logo.png" alt="logo"></a>
						<a class="logo-alt" href=""><img src="<?php echo Yii::app()->theme->baseUrl; ?>/frontend/img/logo-alt.png" alt="logo-alt"></a>
					</div>

				</div>
				<!-- END Logo -->

				<!-- User account -->
				<div class="pull-right user-login">
					<a class="btn btn-sm btn-danger" href="./index.php?r=site/ereport">Lapor</a> 
					or 
					<a class="btn btn-sm btn-primary" href="./index.php?r=site/login">Login</a> 
				</div>
				<!-- END User account -->

				</ul>
				<!-- END Navigation menu -->

			</div>
		</nav>
		<!-- END Navigation bar -->




			<?php echo $content; ?>


			<!-- Site footer -->
			<footer class="site-footer">

				<!-- Bottom section -->
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-6 col-xs-12">
							<p class="copyright-text">Copyrights &copy; 2016 All Rights Reserved.</p>
						</div>

						<div class="col-md-4 col-sm-6 col-xs-12">
							<ul class="social-icons">
								<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- END Bottom section -->

			</footer>
			<!-- END Site footer -->


			<!-- Back to top button -->
			<a id="scroll-up" href="#"><i class="ti-angle-up"></i></a>
			<!-- END Back to top button -->


			<script src="<?php echo Yii::app()->theme->baseUrl; ?>/frontend/js/app.min.js"></script>
			<script src="<?php echo Yii::app()->theme->baseUrl; ?>/frontend/js/custom.js"></script>

		</body>
		</html>
