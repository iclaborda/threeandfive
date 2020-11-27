<?php
// created by ikaro C. Laborda at 20201126 18:43.
// 
// this is on line 1.
// this is on line 2.
// this is on line 3.

namespace Src\Regras;

class Five implements Substituivel {

        public static function numeroSubstituivel($num) {
            return !($num % 5);
        }

        public static function retornaStringSub() {
            return "Five";
        }
}