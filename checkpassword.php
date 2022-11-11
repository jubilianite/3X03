<?php
function checkpassword($password) {
	$array = explode("\n", file_get_contents('password.txt') );
	if ( in_array($password, $array) ) 
	{
		echo "Bad Password";
	}
	else
	{
		echo "Good Password";
	}
}



class CheckPassword {

	private $password;
	
	public function getPassword() {
		return $this->$password;
	}
	
	public function setGumballs($amount) {
		$this->gumballs = $amount;
	}
	
	public function turnWheel() {
		$this->setGumballs($this->getGumballs()-1);
	}
}

	
//$file = fopen("members.txt", "r");
//$members = array();
//
//while (!feof($file)) {
//   $members[] = fgets($file);
//}
//
//fclose($file);
	

?>