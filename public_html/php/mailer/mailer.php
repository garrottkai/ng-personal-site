<?php
/**
 * require all composer dependencies; requiring the autoload file loads all composer packages at once
 **/
require_once("../../vendor/autoload.php");
require_once("../../../rc-key.php");


//// verify user's reCAPTCHA input
$recaptcha = new \ReCaptcha\ReCaptcha($secretKey);
$resp = $recaptcha->verify($_POST["g-recaptcha-response"], $_SERVER["REMOTE_ADDR"]);

try {
		// if reCAPTCHA error, output the error code to the user
	if (!$resp->isSuccess()) {
		throw(new Exception("reCAPTCHA error!"));
	}
		// sanitize the inputs from the form: name, email, subject, and message
	$input = json_decode(file_get_contents('php://input'));
	if($input !== null) {
		$name = trim($input['senderName']);
		$name = filter_var($name, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		$email = trim($input['senderEmail']);
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);
		$subject = trim($input['subject']);
		$subject = filter_var($subject, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		$message = trim($input['message']);
		$message = filter_var($message, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

		// create Swift message
		$swiftMessage = Swift_Message::newInstance();

		// attach the sender to the message
		// this takes the form of an associative array where the Email is the key for the real name
		$senderInfo = [$email => $name];
		$swiftMessage->setFrom($senderInfo);

		/**
		 * attach the recipients to the message
		 * notice this an array that can include or omit the the recipient's real name
		 * use the recipients' real name where possible; this reduces the probability of the Email being marked as spam
		 **/
		$recipients = $MAIL_RECIPIENTS;
		$swiftMessage->setTo($recipients);

		// attach the subject line to the message
		$swiftMessage->setSubject($subject);

		/**
		 * attach the actual message to the message
		 * here, we set two versions of the message: the HTML formatted message and a special filter_var()ed
		 * version of the message that generates a plain text version of the HTML content
		 * notice one tactic used is to display the entire $confirmLink to plain text; this lets users
		 * who aren't viewing HTML content in Emails still access your links
		 **/
		$swiftMessage->setBody($message, "text/html");
		$swiftMessage->addPart(html_entity_decode($message), "text/plain");

		/**
		 * send the Email via SMTP; the SMTP server here is configured to relay everything upstream via CNM
		 * this default may or may not be available on all web hosts; consult their documentation/support for details
		 * SwiftMailer supports many different transport methods; SMTP was chosen because it's the most compatible and has the best error handling
		 * @see http://swiftmailer.org/docs/sending.html Sending Messages - Documentation - SwiftMailer
		 **/
		$smtp = Swift_SmtpTransport::newInstance("localhost", 25);
		$mailer = Swift_Mailer::newInstance($smtp);
		$numSent = $mailer->send($swiftMessage, $failedRecipients);

		/**
		 * the send method returns the number of recipients that accepted the Email
		 * so, if the number attempted is not the number accepted, this is an Exception
		 **/
		if($numSent !== count($recipients)) {
			// the $failedRecipients parameter passed in the send() method now contains contains an array of the Emails that failed
			throw(new RuntimeException("Unable to send email"));
		}

		// report a successful send
		echo "<div class=\"alert alert-success\" role=\"alert\">Email successfully sent.</div>";
	} else {
		throw(new Exception());
	}
} catch(Exception $exception) {
	echo "<div class=\"alert alert-danger\" role=\"alert\"><strong>Oh snap!</strong> Unable to send email: " . $exception->getMessage() . "</div>";
}
