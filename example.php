<?php
require("security-class.php");
$security = new Security();
$security->init_security("MyFirstSecretPassword", "MySecondSecretPassword");
$encrypted = $security->encrypt("hallo");
echo "<a href='?password=" . urlencode($encrypted) . "'>" . $encrypted . "</a>";
echo "<br /><br />";
echo $security->decrypt($_GET['password']);
?>