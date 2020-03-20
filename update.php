<pre>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
	unlink("data/update.cache.sqlite");
	system("../.env/bin/python ./update.py");
}
?>
</pre>
<form action="/update" method="POST">
	<input type="submit" value="Update">
</form>
