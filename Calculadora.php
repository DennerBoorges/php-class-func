<?php
    class Calculadora
    {
        public function soma($x, $y)
        {
            return $x + $y;
        }

        public function sub($x, $y)
        {
            return $x - $y;
        }

        public function mult($x, $y)
        {
            return $x * $y;
        }

        public function div($x, $y)
        {
            if($y == 0)
            {
                return 0;
            }
            return $x / $y;
        }

        // public function pot($x, $y)
        // {
        //     for($i = 0; $i )
        //     $total = $total * $x;
        //     $numero = 1;

        // }
    }

?>