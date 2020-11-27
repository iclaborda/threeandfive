<?php
// created by Ikaro C. Laborda at 20201127 09:38.
// 
// this is on line 1.
// this is on line 2.
// this is on line 3.

use Src\Regras\Five;

class FiveTest extends PHPUnit\Framework\TestCase {

    /**
     * @dataProvider substituivelProvider
     */

    public function testNumeroSubstituivel($num, $esperado) {

        $five = new Five();
        $this->assertEquals($esperado, $five->numeroSubstituivel($num));
    }

    public function substituivelProvider() {

        //Determine which conditions should be true of false for testing case purposes
        return [
            [1, false],
            [2, false],
            [3, false],
            [4, false],
            [5, true]
        ];
    }

    public function testRetornaStringSub() {

        $five = new Five();
        $this->assertEquals('Five', $five->retornaStringSub());
    }

    
}
