<?php
require_once( dirname(__FILE__) . './../Gengo.class.php' );
use PHPUnit\Framework\TestCase;
class MyAppTest extends TestCase {
    public function testGengo () {
        $this->assertEquals( Gengo::result_gengo('18680125'), '㍾');
        $this->assertEquals( Gengo::result_gengo('19120730'), '㍽');
        $this->assertEquals( Gengo::result_gengo('19261225'), '㍼');
        $this->assertEquals( Gengo::result_gengo('19890108'), '㍻');
        $this->assertEquals( Gengo::result_gengo('20190501'), '㋿');
    }
}
?>
