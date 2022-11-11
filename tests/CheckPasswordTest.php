<?
use PHPUnit\Framework\TestCase;

class CheckPasswordTest extends TestCase {
    public function testCheckPassword() {
        include_once 'CheckPassword.php';
        $result = CheckPassword("password");
        $this->assertEquals('Bad Password', $result);
    }
}

?>