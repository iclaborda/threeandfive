<?php
// created by ikaro C. Laborda at 20201126 18:39.
// 
// this is on line 1.
// this is on line 2.
// this is on line 3.

namespace Src\Regras;

class Three implements Substituivel {

        public static function numeroSubstituivel($num) {
            return !($num % 3);
        }

        public static function retornaStringSub() {
            return "Three";
        }
}
