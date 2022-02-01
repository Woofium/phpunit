<?php
namespace TDD\Test;
    
require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";

use PHPUnit\Framework\TestCase;
use TDD\Maaltijden;

class MaaltijdenTest extends TestCase {

    public $maaltijd;

    public function setUp() {
        $this->maaltijd = new Maaltijden();
    }   

    public function tearDown() {
        unset($this->maaltijd);
    }

    /**
     * @dataProvider providePersoneelsMaaltijden
     */
    public function testPersoneelsMaaltijden($aantalTafels, $aantalGasten, $expected) {
        $output = $this->maaltijd->personeelsMaaltijden($aantalTafels, $aantalGasten);
        $this->assertEquals(
            $expected,
            $output,
            "Het aantal te maken maaltijden voor het personeel is $expected"
        );
    }

    public function providePersoneelsMaaltijden() {
        return[
            [6, 24, 15],
            [8, 36, 19],
            [0, 0, 5],

        ];
    }

}

?>