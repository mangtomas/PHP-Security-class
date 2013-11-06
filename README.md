PHP Security class
==================
By Lars Jansen Productions

This class makes it possible to easily encrypt and decrypt passwords

Usage
==================
Review the examples if you do not want to read this
1. Include the class into your project: require("security-class.php");
2. Initialize the class: $security = new Security(); 
    $security->init_security(SECRET_PASSWORD, ANOTHER_SECRET_PASSWORD);
3. Encrypt a password: $security->encrypt(PASSWORD_TO_ENCRYPT);
4. Decrypt a password: $decrypted = $security->decrypt(PASSWORD_TO_DECRYPT);
And that's it!

Examples
=================
<?php
require("security-class.php");
$security = new Security();
$security->init_security("MyFirstSecretPassword", "MySecondSecretPassword")
echo $security->encrypt("hallo");
echo "<br /><br />";
echo $security->decrypt($_GET['password']);
?>
