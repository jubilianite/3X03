<?
class test extends PHPUnit_Framework_TestCase {
    public function testcheckpassword() {
        include_once 'checkpassword.php';
        $result = checkpassword("password");

        $this->assertEquals('Bad Password', $result);
    }
}
?>