PHP Security class
==================
By Lars Jansen Productions<br />
This class makes it possible to easily encrypt and decrypt passwords<br /><br />
<a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-sa/3.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">PHP Security class</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.ljpc.nl" property="cc:attributionName" rel="cc:attributionURL">Lars Jansen Productions</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution-ShareAlike 3.0 Unported License</a>.
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
