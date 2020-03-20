<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Turtle's Trinkets</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/trinkets.css" rel="stylesheet">
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.7.4/less.min.js"></script>

<?php
$_items = 0;
function item($title, $link, $image, $description) {
	global $_items;
	$_items++;
	if(strpos($image, "http") !== 0) {
		$image = "img/$image-252x168.jpg";
	}
	$title = $title ? "<h2>$title</h2>" : "";
	echo <<<EOD
		<div class="col-md-3">
			<a class="thumbnail" href="$link">
				$title
				<img src="$image">
				<p class="description">$description</p>
			</a>
		</div>
EOD;
	if($_items > 0 && $_items % 4 == 0) {
		echo <<<EOD
	</div>
	<div class="row">
EOD;
	}
}
?>
