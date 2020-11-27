<?php
// created by Ikaro C. Laborda at 20201127 09:56.
// 
// this is on line 1.
// this is on line 2.
// this is on line 3.

use Src\Display;
use Src\Regras\ThreeAndFive;


//This Test case uses ThreeAndFive as assertive test
class DisplayTest extends PHPUnit\Framework\TestCase {

    /**
     * @dataProvider substituivelProviderVazio
     */

    public function testNumeroSubstituivelVazio($numero, $esperado) {
        $display = new Display();
        $this->assertEquals($esperado, $display->substituir($numero));

    }



    public function substituivelProviderVazio() {
        return [
           [1, 1],
           [2, 2],
           [3, 3],
           [4, 4],
           [5, 5],
           [15, 15]
        ];
   }

    /**
     * @dataProvider substituivelProvider
     */

    public function testSubstituicao($numero, $esperado) {
        $display = new Display([new ThreeAndFive]);
        $this->assertEquals($esperado, $display->substituir($numero));
    }

    /**
     * @dataProvider substituivelProvider
     */

    public function testAcrescentaSubstituivel($numero, $esperado) {
        $display = new Display();
        $display->acrescentaSubstituivel(new ThreeAndFive);
        $this->assertEquals($esperado, $display->substituir($numero));
    }

    public function substituivelProvider() {

        return [
            [1, 1],
            [2, 2],
            [3, 3],
            [4, 4],
            [5, 5],
            [15, 'ThreeAndFive']
         ];

    }

    public function testDisplayNumLimpo() {
        $this->expectOutputString('1,2,3,4,5,6,7,8,9,10,11,12,13,14,15');
        $display = new Display();
        $display->mostrarNumeros(15,1,",");
    }

    public function testDisplayNumSubstituido() {
        $this->expectOutputString('1,2,3,4,5,6,7,8,9,10,11,12,13,14,ThreeAndFive');
        $display = new Display();
        $display->acrescentaSubstituivel(new ThreeAndFive);
        $display->mostrarNumeros(15,1,",");

    }
}
