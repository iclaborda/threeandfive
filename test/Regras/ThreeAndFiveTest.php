<?php
// created by Ikaro C. Laborda at 20201127 09:45.
// 
// this is on line 1.
// this is on line 2.
// this is on line 3.

use Src\Regras\ThreeAndFive;

class ThreeAndFiveTest extends PHPUnit\Framework\TestCase {

    /**
     * @dataProvider substituivelProvider
     */

    public function testNumeroSubstituivel($num, $esperado) {

        $threeAndFive = new ThreeAndFive();
        $this->assertEquals($esperado, $threeAndFive->numeroSubstituivel($num));
    }

    public function substituivelProvider() {

        //Determine which conditions should be true of false for testing case purposes
        return [
            [1, false],
            [2, false],
            [3, false],
            [4, false],
            [5, false],
            [15, true]
        ];
    }

    public function testRetornaStringSub() {

        $threeAndFive = new ThreeAndFive();
        $this->assertEquals('ThreeAndFive', $threeAndFive->retornaStringSub());
    }

    
}
