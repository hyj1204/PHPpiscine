<?PHP
if ($_SERVER["PHP_AUTH_USER"] == "zaz" && $_SERVER["PHP_AUTH_PW"] == "jaimelespetitsponeys")
{
	$file = base64_encode(file_get_contents("../img/42.png"));//base64_encode：Encodes data with MIME base64.file_get_contents：Reads entire file into a string
	echo "<html><body>\nHello Zaz<br />\n<img src='data:image/png;base64,$file'>\n</body></html>\n";
}
else
{
	header("WWW-Authenticate: Basic realm=''Member area''");
    header("HTTP/1.0 401 Unauthorized");
    header("Content-Length: 72");
	echo "<html><body>That area is accessible for members only</body></html>     \n";
	exit;
}
?>