<?php
// created by Ikaro C. Laborda at 20201126 19:07.
// 
// this is on line 1.
// this is on line 2.
// this is on line 3.

namespace src;

use Src\Regras\Substituivel;

class Display {
    private $substituiveis = [];

    public function __construct($substituiveis = []) {
        //No construtor da classe, declaramos a funcao de preenchimento do vetor que conterá os números e strings a serem substituidos
        foreach($substituiveis as $substituivel) {
            $this->acrescentaSubstituivel($substituivel);
        }
    }

    public function acrescentaSubstituivel(Substituivel $substituivel) {
        $this->substituiveis[] = $substituivel;

    }
    
    function processarVetor($vetor) {
        return array_map(function($numero) {
            return $this->substituir($numero);
        }, $vetor);
    }
    
    public function mostrarNumeros($limitador = 100, $inicio = 1, $separador = "\n") {
        $numeros = range($inicio,$limitador);
        $numerosSubstituidos = $this->processarVetor($numeros);
        echo implode($separador, $numerosSubstituidos);
    }


    public function substituir($numero) {
        //verifica se existem numeros que atendam às regras e possam ser substituidos
        foreach($this->substituiveis as $substituivel) {
            if($substituivel->numeroSubstituivel($numero)) {
                return $substituivel->retornaStringSub();
            }
        }
        return $numero;
    }
}


