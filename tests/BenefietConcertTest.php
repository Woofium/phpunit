<?php
namespace TDD\Test;
    
require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";

use PHPUnit\Framework\TestCase;
use TDD\BenefietAvond;

class BenefietConcertTest extends TestCase {

    public $testBenefietConcert;

    public function setUp() {
        $this->testBenefietConcert = new BenefietConcertTest();
    }   

    public function tearDown() {
        unset($this->testBenefietConcert);
    }

    /**
     * @dataProvider provideKostenBenefietConcert
     */

    public function testKostenBenefietConcert($prijsTickets, $aantalBezoekers, $expected) {
        $output = $this->testBenefietConcert->kostenBenefietConcert($prijsTickets, $aantalBezoekers);
        $this->assertEquals(
            $expected,
            $output,
            "De totaal bedrag van alle tickets zijn $expected"
        );
    }

    public function provideKostenBenefietConcert() {
        return[
            [[1200, 600, 45], "Concert zit vol"],
            [[381, 47, 41], "Test"],
            [[1074, 293, 10], "Test"],
            [[638, 622, 33], "Test"],
            [[37, 631, 45], "Test"],
            [[381, 310, 5], "Test"],
            [[862, 371, 2], "Test"],
            [[1173, 729, 9], "Test"],
        ];
    }

}

?>