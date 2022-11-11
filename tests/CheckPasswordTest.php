<?
use PHPUnit\Framework\TestCase; 

class CheckPasswordTest extends TestCase { //Naming Convention IS IMPORTANT
    public function testCheckPassword() {
		$path = dirname( dirname(__FILE__) ); //Get Parent Directory
        include_once $path . '/CheckPassword.php'; //Get CheckPassword.php's path
        $result = CheckPassword('password'); //Run CheckPassword function
        $this->assertTrue("Good Password" != $result); //Compare
    }
}

?>