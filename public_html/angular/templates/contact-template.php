<?php require_once("header-template.php");?>

      <!--Begin Contact Form-->
      <div class="form-container">
<form id="contact-form" action="php/mailer/mailer.php" method="post">
          <h2 id="contact-heading">Contact Kai</h2>
  <div class="form-group">
    <div class="input-group">
      <div class="input-group-addon">
        <i class="fa fa-user" aria-hidden="true"></i>
      </div>
      <input type="text" class="form-control" id="name" name="name" placeholder="Name">
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
  <div class="g-recaptcha" id="rct" data-sitekey="6LdyPAkUAAAAAFkqWlHuXA0lffTZIWFm0a8oUvTW">
  </div>
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
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js" async defer></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js" async defer></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js" async defer></script>

  <!-- JavaScript Form Validator -->

  <script src="js/form-validate.js" async defer></script>

  <!-- Google reCAPTCHA -->
<script type="text/javascript" src="https://www.google.com/recaptcha/api.js" async defer></script>
