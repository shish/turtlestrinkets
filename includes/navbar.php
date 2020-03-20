<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="./">Turtle's Trinkets</a>
		</div>
		<div class="collapse navbar-collapse">
			<?php
			function actif($name, $title)
			{
				global $active;
				if ($active == $name) {
					return '<li class="active"><a href="' . $name . '">' . $title . '</a></li>';
				} else {
					return '<li><a href="' . $name . '">' . $title . '</a></li>';
				}
			}
			?>
			<ul class="nav navbar-nav">
				<?php
				echo actif("bracelets", "Bracelets");
				echo actif("earrings", "Earrings");
				echo actif("commissions", "Commissions");
				echo actif("about", "About");
				echo actif("contact", "Contact");
				?>
			</ul>
		</div>
		<!--/.nav-collapse -->
	</div>
</div>

<div style="width: 100%; height: 64px;"></div>
