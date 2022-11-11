<?
use PHPUnit\Framework\TestCase;

class CheckPasswordTest extends TestCase {
    public function testCheckPassword() {
		$path = dirname( dirname(__FILE__) );
        include_once $path . '/CheckPassword.php';		
        $result = CheckPassword('password');
        $this->assertTrue('Bad Password' == $result);
    }
}

?>