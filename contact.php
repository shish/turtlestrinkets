<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "includes/header.php"; ?>
</head>
<body>
<?php $active = "contact";
include "includes/navbar.php"; ?>

<div class="container">
	<?php
	if(@$_POST["message"]) {

		if (@$_POST["captcha"] == "8") {
			mail(
				"turtles-trinkets-kent@hotmail.com",
				"Message about Turtle's Trinkets",
				"From: ${_POST['from']}\n\n${_POST['message']}",
				"From: ${_POST['from']}"
			);
			print '<div class="alert alert-success" role="alert">
        		<strong>Mail sent, thanks!</strong> Becki will respond when she can :-)
      		</div>';
		} else {
			print '<div class="alert alert-danger" role="alert">
        		<strong>Maths failed</strong> You need to type "8" into the second box to show you aren\'t a spammer :-(
      		</div>';
		}
	}
	?>
	<div class="row">
		<div class="col-md-4">
			<div class="thumbnail">
				<h2>Details</h2>

				<p>
This section is for contacting me with any questions or queries you may have, be it about a product
I am currently selling or a design / commission you would love to see. All messages go straight to my
email, so please remember to include your email address so I can reply to you.
				</p>

				<p>
If you have any queries regarding refunds, please click on the Etsy link that will take you to my shop.
From there please use the “Contact Shop Owner” button to contact me.
				</p>
			</div>
			<!--
			<div class="thumbnail hidden-xs hidden-sm">
				<img src="img/misc/work1-350x100.jpg">
			</div>
			-->
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<h2>Contact</h2>

				<form action="contact.php" method="POST">
					<input type="email" required="required"
						   placeholder="Your Email" name="from"
						   value="">
					<input type="number" required="required"
						   placeholder="What is 6 + 2?" name="captcha">
					<textarea required="required"
							  placeholder="Your Message" name="message"
							  ></textarea>
					<input style="width: 100%;" type="submit" value="Send Message">
				</form>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<h2>Links</h2>
				<ul>
					<li><a href="https://www.etsy.com/uk/shop/TurtlesTrinkets">Etsy</a></li>
					<li><a href="https://www.facebook.com/TurtlesTrinketsKent">Facebook</a>
					<li><a href="http://turtlestrinkets.deviantart.com/">Deviantart</a>
				</ul>
			</div>
			<div class="thumbnail hidden-xs hidden-sm">
				<img src="img/misc/work3-350x170.jpg">
			</div>
		</div>
	</div>
	<?php include "includes/legal.php"; ?>
</div>
<!-- /.container -->

<?php include "includes/footer.php"; ?>
</body>
</html>
