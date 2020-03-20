<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "includes/header.php"; ?>
</head>
<body>
<?php $active = "commissions";
include "includes/navbar.php"; ?>

<div class="container">
	<div class="row">
		<?php
		item(
			"Turquoise Charm Bracelet", null, "commissions/rob",
			"Similar to the other items, this lovely bracelet was
			made from turquoise pearlescent bead that were connected
			by coils of silver plated wire. However, as it was made
			with a specific person in mind, I added the cupcake charms
			to because of her love of baking, and the orange Swaroski
			crystals to reflect her sparkly personality."
		);
		item(
			"Handmade Charm Earrings", null, "commissions/earrings",
			"These earrings were a present for my boyfriend’s sister.
			While they are like the leaf charm earrings in design, I
			used the larger 10mm and 6mm beads for the main body for
			a more chunky and bold look."
		);
		item(
			"Snow globe Necklace", null, "commissions/snowglobe",
			"The necklace was my first ever attempt at making a snow
			globe of any form. Inside the glass globe were a mixture
			of tiny purple aluminium stars and glitter. The snow
			globe pendent was attached to a silver plated chain.
			Overall this made the perfect shimmering Christmas present
			for my best friend."
		);
		item(
			"Space Bracelet", null, "commissions/space_bracelet",
			"This has to be my favourite commission yet- a bracelet
			made of all the planets in our solar system (including
			Pluto, as I am a 90’s child). I made each bead from
			jewellery clay before using acrylic paint and gloss
			varnish for the planet design. Unlike the other
			bracelets, the beads were connected with jump rings with
			a silver star charm hanging between."
		);
		?>
	</div>
	<div class="row">
		<?php
		item(
			"Electric Purple Bracelet", null, "commissions/IMG_0496",
			"This bracelet was not so much a commission but a present
			to me and was made using elastic, rather than wire. Each
			purple bead was made from glass, and had a crackled effect
			running through them, hence the name “Electric Purple
			Bracelet”. I decided to use silver spacer beads as
			separators to add more vivacity to the design."
		);
		?>
	</div>
	<?php include "includes/legal.php"; ?>
</div>
<!-- /.container -->

<?php include "includes/footer.php"; ?>
</body>
</html>
