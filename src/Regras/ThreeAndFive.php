<?php
// created by ikaro C. Laborda at 20201126 18:49.
// 
// this is on line 1.
// this is on line 2.
// this is on line 3.

namespace src\Regras;
use src\Substituivel\Substituivel;

class ThreeAndFive implements Substituivel {

        public static function numeroSubstituivel($num) {
            //if a number is a multiple of 3 and 5, it's basically a multiple of 15 (3*5)
            return !($num % 15);
        }

        public static function retornaStringSub() {
            return "ThreeAndFive";
        }
}