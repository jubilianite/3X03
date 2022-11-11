<?
class MyScriptTest extends PHPUnit_Framework_TestCase {
    public function testMyFunction() {
        include_once 'checkpassword.php';
        $result = checkpassword("password");

        $this->assertEquals('Bad Password', $result);
    }
}
?>