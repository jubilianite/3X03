<?
class CheckPasswordTest extends PHPUnit_Framework_TestCase {
    public function testCheckPassword() {
        include_once 'CheckPassword.php';
        $result = CheckPassword("password");
        $this->assertEquals('Bad Password', $result);
    }
}

?>