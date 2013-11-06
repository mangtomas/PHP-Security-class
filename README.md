PHP Security class
==================
By Lars Jansen Productions

This class makes it possible to easily encrypt and decrypt passwords

Usage
==================
Review the example if you do not want to read this.<br />
1. Include the class into your project: <pre>require("security-class.php");</pre>
2. Initialize the class: <pre>$security = new Security(); <br />
$security->init_security(SECRET_PASSWORD, ANOTHER_SECRET_PASSWORD);</pre>
3. Encrypt a password: <pre>$encrypted = $security->encrypt(PASSWORD_TO_ENCRYPT);</pre>
4. Decrypt a password: <pre>$decrypted = $security->decrypt(PASSWORD_TO_DECRYPT);</pre>
And that's it!<br />

Example
=================
```php
<?php
require("security-class.php");
$security = new Security();
$security->init_security("MyFirstSecretPassword", "MySecondSecretPassword");
$encrypted = $security->encrypt("hallo");
echo "<a href='?password=" . urlencode($encrypted) . "'>" . $encrypted . "</a>";
echo "<br /><br />";
echo $security->decrypt($_GET['password']);
?>
```
