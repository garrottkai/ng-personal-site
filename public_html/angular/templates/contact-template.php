<!-----------Place to build ng-driven contact form------------>

<?php require_once("header-template.php"); ?>
<div class="col-xs-12 col-md-10 col-md-offset-1">

	<!--Begin Contact Form-->
	<form name="contactForm" id="contactForm" novalidate>
		<div class="form-group">
			<div class="input-group"
				  ng-class="{ 'has-error': contactForm.senderName.$touched && contactForm.senderName.$invalid }">
				<div class="input-group-addon input-label">
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
				<input type="text" class="form-control input-field" id="senderName" name="senderName" ng-minlength="4" ng-maxlength="64"
						 ng-model="formData.senderName" ng-required="true" placeholder="Name">
			</div>
			<div class="alert alert-danger" role="alert" ng-messages="contactForm.senderName.$error"
				  ng-if="contactForm.senderName.$touched" ng-hide="contactForm.senderName.$valid">
				<p ng-message="minlength">Name is too short.</p>
				<p ng-message="maxlength">Name is too long.</p>
				<p ng-message="required">Please enter your name.</p>
			</div>
		</div>
		<div class="form-group">
			<div class="input-group"
				  ng-class="{ 'has-error': contactForm.senderEmail.$touched && contactForm.senderEmail.$invalid }">
				<div class="input-group-addon input-label">
					<i class="fa fa-envelope" aria-hidden="true"></i>
				</div>
				<input type="email" class="form-control input-field" id="senderEmail" name="senderEmail" ng-minlength="8"
						 ng-maxlength="128" ng-model="formData.senderEmail" ng-required="true" placeholder="Email">
			</div>
			<div class="alert alert-danger" role="alert" ng-messages="contactForm.senderEmail.$error"
				  ng-if="contactForm.senderEmail.$touched" ng-hide="contactForm.senderEmail.$valid">
				<p ng-message="minlength">Email address is too short.</p>
				<p ng-message="maxlength">Email address is too long.</p>
				<p ng-message="required">Please enter your email address.</p>
			</div>
		</div>
		<div class="form-group">
			<div class="input-group">
				<div class="input-group-addon input-label">
					<i class="fa fa-pencil" aria-hidden="true"></i>
				</div>
				<input type="text" class="form-control input-field" id="subject" name="subject" ng-model="formData.subject"
						 ng-required="false" placeholder="Subject">
			</div>
		</div>
		<div class="form-group">
			<div class="input-group"
				  ng-class="{ 'has-error': contactForm.message.$touched && contactForm.message.$invalid }">
				<div class="input-group-addon input-label">
					<i class="fa fa-comment" aria-hidden="true"></i>
				</div>
				<textarea class="form-control input-field" rows="5" id="message" name="message" ng-maxlength="2000"
							 ng-model="formData.message" ng-required="true"
							 placeholder="Message (2000 characters max)"></textarea>
				<div class="alert alert-danger" role="alert" ng-messages="contactForm.message.$error"
					  ng-if="contactForm.message.$touched" ng-hide="contactForm.message.$valid">
					<p ng-message="maxlength">Message is longer than 2000 characters!</p>
					<p ng-message="required">Message body is empty</p>
				</div>
			</div>
		</div>

		<!-- reCAPTCHA -->
		<div class="g-recaptcha" id="rct" data-sitekey="6LeEIgkUAAAAAItyDC8HxwYl2TBlbmSk6Xsn4XTV"></div>
		<div class="btns">
			<button class="btn btn-success" type="submit" ng-click="sendMail()"><i class="fa fa-paper-plane"></i> Send</button>
			<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
		</div>
	</form>

	<!--empty area for form error/success output-->
	<div class="row">
		<div class="col-xs-12">
			<div id="output-area"></div>
		</div>
	</div>
</div>

<!-- Google reCAPTCHA -->
<script src='https://www.google.com/recaptcha/api.js'></script>
