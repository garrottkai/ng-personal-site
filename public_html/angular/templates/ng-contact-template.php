<!-----------Place to build ng-driven contact form------------>

<?php require_once("header-template.php");?>
<div>

	<!--Begin Contact Form-->
	<form name="contactForm" id="contactForm" ng-submit="submit(formData, contactForm.$valid);" novalidate>
		<div class="form-group">
			<div class="input-group" ng-class="{ 'has-error': contactForm.senderName.$touched && contactForm.senderName.$invalid }">
				<div class="input-group-addon">
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
				<input type="text" class="form-control" id="senderName" name="senderName" ng-minlength="4" ng-maxlength="64" ng-model="formData.senderName" ng-required="true" placeholder="Name">
			</div>
			<div class="alert alert-danger" role="alert" ng-messages="contactForm.senderName.$error" ng-if="contactForm.senderName.$touched" ng-hide="contactForm.senderName.$valid">
				<p ng-message="minlength">Name is too short.</p>
				<p ng-message="maxlength">Name is too long.</p>
				<p ng-message="required">Please enter your name.</p>
			</div>
		</div>
		<div class="form-group">
			<div class="input-group">
				<div class="input-group-addon">
					<i class="fa fa-envelope" aria-hidden="true"></i>
				</div>
				<input type="email" class="form-control" id="email" name="email" placeholder="Email">
			</div>
		</div>
		<div class="form-group">
			<div class="input-group">
				<div class="input-group-addon">
					<i class="fa fa-pencil" aria-hidden="true"></i>
				</div>
				<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
			</div>
		</div>
		<div class="form-group">
			<div class="input-group">
				<div class="input-group-addon">
					<i class="fa fa-comment" aria-hidden="true"></i>
				</div>
				<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message (2000 characters max)"></textarea>
			</div>
		</div>

		<!-- reCAPTCHA -->
		<div class="g-recaptcha" id="rct" data-sitekey="6LdOqCETAAAAABB-pUlY6mNg14XxKD0qOukq-AfT"></div>
		<div class="btns">
			<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
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

<!-- jQuery Form, Additional Methods, Validate -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

<!-- JavaScript Form Validator -->

<script src="../../js/form-validate.js"></script>

<!-- Google reCAPTCHA -->
<script src='https://www.google.com/recaptcha/api.js'></script>
