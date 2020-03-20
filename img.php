<?php
$tgt = $_GET["img"];

$parts = array();
if(preg_match("#(img/[a-z]*/[a-zA-Z0-9_\-]*)-(\d+)x(\d+).jpg#", $tgt, $parts)) {
	$file = $parts[1];
	$ow = $parts[2] * 2;
	$oh = $parts[3] * 2;

	$in = imagecreatefromjpeg("$file.jpg");
	$iw = imagesx($in);
	$ih = imagesy($in);

	$xscale = ($oh / $ih);  // how much we need to scale by for correct w
	$yscale = ($ow / $iw);  // how much we need to scale by for correct y

	// mid = scaled to be the right size in one dimention,
	// too large in the other (same ratio as input)
	$scale = max($xscale, $yscale);  // err on the side of "too large"
	$mw = $iw * $scale;
	$mh = $ih * $scale;
	$mid = imagecreatetruecolor($mw, $mh);
	imagecopyresampled(
		$mid,       $in,
		0, 0,       0, 0,
		$mw, $mh,   $iw, $ih
	);

	$out = imagecreatetruecolor($ow, $oh);
	imagecopyresized(
		$out,      $mid,
		0, 0,      ($mw - $ow)/2, ($mh - $oh)/2,
		$ow, $oh,  $ow, $oh
	);

	imagejpeg($out, $tgt);

	header('Content-type: image/jpeg');
	print file_get_contents($tgt);
} else {
	print "no match in $tgt";
}
?>
