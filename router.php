<?php
// custom routing for stand-alone mode
if (PHP_SAPI !== 'cli-server') {
    die('cli only');
}

// use the default handler (serve static files, interpret php files)
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js|php)(\?.*)?$/', $_SERVER["REQUEST_URI"])) {
	return false;
}
if (preg_match('/([a-z]+)$/', $_SERVER["REQUEST_URI"], $matches)) {
	require_once $matches[1] . ".php";
}
else {
	require_once "index.php";
}
