<?
class test extends PHPUnit_Framework_TestCase {
    public function testcheckpassword() {
        include_once 'checkpassword.php';
        $result = checkpassword("password");
		echo "HELP";
        $this->assertEquals('Bad Password', $result);
    }
}
?>