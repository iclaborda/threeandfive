<?php
// created by Ikaro C. Laborda at 20201127 09:24.
// 
// this is on line 1.
// this is on line 2.
// this is on line 3.

use Src\Regras\Three;

class ThreeTest extends PHPUnit\Framework\TestCase {

    /**
     * @dataProvider substituivelProvider
     */

    public function testNumeroSubstituivel($num, $esperado) {

        $three = new Three();
        $this->assertEquals($esperado, $three->numeroSubstituivel($num));
    }

    public function substituivelProvider() {

        //Determine which conditions should be true of false for testing case purposes
        return [
            [1, false],
            [2, false],
            [3, true],
            [4, false],
            [5, false],
            [6, true]
        ];
    }

    public function testRetornaStringSub() {

        $three = new Three();
        $this->assertEquals('Three', $three->retornaStringSub());
    }

    
}
