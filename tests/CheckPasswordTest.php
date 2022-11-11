<?
use PHPUnit\Framework\TestCase;

class CheckPasswordTest extends TestCase {
    public function testCheckPassword() {
		$path = dirname( dirname(__FILE__) );
        include_once $path . '/CheckPassword.php';
	
		
		$result = new CheckPassword();
        $result->CheckPassword('Password');
        $this->assertEquals('Bad Password', $result);
    }
}

?>