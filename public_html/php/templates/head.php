<!DOCTYPE html>
<html ng-app="kaiApp" lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- sets IE rendering to IE-EDGE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- sets viewport width to device width, scaling 1:1 -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<base href="<?php echo realpath('../../..'); ?>"/>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
				integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- FontAwesome minified -------------->

		<link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"
				rel="stylesheet"/>

		<!-- Google fonts ---------------------->
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/styles.css" type="text/css">

		<!-- jQuery 2-->
		<!--<script
	  src="http://code.jquery.com/jquery-2.2.4.min.js"
	  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
	  crossorigin="anonymous"></script>-->
		<script
	src="https://code.jquery.com/jquery-2.0.0.min.js"
	integrity="sha256-1IKHGl6UjLSIT6CXLqmKgavKBXtr0/jJlaGMEkh+dhw="
	crossorigin="anonymous"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
				  integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
				  crossorigin="anonymous"></script>

			<!-- Google reCAPTCHA -->
		<!--<script type="text/javascript" src="https://www.google.com/recaptcha/api.js" async defer></script>-->

		<!--AngularJS libraries-->
		<?php $ANGULAR_VERSION = "1.5.8"; ?>
		<script type="text/javascript"
				  src="//ajax.googleapis.com/ajax/libs/angularjs/<?php echo $ANGULAR_VERSION; ?>/angular.min.js"></script>
		<script type="text/javascript"
				  src="//ajax.googleapis.com/ajax/libs/angularjs/<?php echo $ANGULAR_VERSION; ?>/angular-route.js"></script>
		<script type="text/javascript"
				  src="//ajax.googleapis.com/ajax/libs/angularjs/<?php echo $ANGULAR_VERSION; ?>/angular-messages.min.js"></script>

		<!--Angular app files -->
		<script src="angular/app.js"></script>
		<script src="angular/route-config.js"></script>
		<script src="angular/directives/bootstrap-breakpoint.js"></script>
		<script src="angular/controllers/header-controller.js"></script>
		<script src="angular/controllers/home-controller.js"></script>
		<script src="angular/controllers/portfolio-controller.js"></script>
		<script src="angular/controllers/about-controller.js"></script>
		<script src="angular/controllers/contact-controller.js"></script>

		<!-- custom js -->
		<!--<script src="js/scroll.js"></script>-->

		<link rel="icon" href="media/path41440.png">

		<title ng-bind="title"></title>
	</head>
