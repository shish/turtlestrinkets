<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "includes/header.php"; ?>
</head>
<body>
<?php $active = "earrings";
include "includes/navbar.php"; ?>

<div class="container">
	<div class="row">
		<?php
include "data/earrings.php";
?>
	</div>
	<?php include "includes/legal.php"; ?>
</div>
<!-- /.container -->

<?php include "includes/footer.php"; ?>
</body>
</html>
