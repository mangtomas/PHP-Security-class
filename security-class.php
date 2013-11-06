<?php
//This class is made by Lars Jansen Productions
//Please review GitHub for licensing information and examples
class Security{

	public $unlocker = "";
	public $salt = "";

	function encrypt($password = "") { 
		if(($this->unlocker == "") || ($this->salt == ""))
			die("<strong>ERROR: </strong>Please initialize the class");
		if($password == "")
			die("<strong>ERROR: </strong>No password to encrypt");
 		$key = hash('SHA256', $this->salt . $this->unlocker, true);
 		srand(); 
 		$iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC), MCRYPT_RAND);
 		if (strlen($iv_base64 = rtrim(base64_encode($iv), '=')) != 22) return false;
 		$encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $password . md5($password), MCRYPT_MODE_CBC, $iv));
 		return $iv_base64 . $encrypted;
 	} 

	function decrypt($password = "") {
		if(($this->unlocker == "") || ($this->salt == ""))
			die("<strong>ERROR: </strong>Please initialize the class");
		if($password == "")
			die("<strong>ERROR: </strong>No password to encrypt");
		$key = hash('SHA256', $this->salt . $this->unlocker, true);
 		$iv = base64_decode(substr($password, 0, 22) . '==');
 		$password = substr($password, 22);
 		$decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, base64_decode($password), MCRYPT_MODE_CBC, $iv), "\0\4");
 		$hash = substr($decrypted, -32);
 		$decrypted = substr($decrypted, 0, -32);
 		if (md5($decrypted) != $hash) return false;
 		return $decrypted;
 	}

 	function init_security($globalunlocker, $globalsalt){
 		$this->unlocker = $globalunlocker;
 		$this->salt=$globalsalt;
 	}
}
?>