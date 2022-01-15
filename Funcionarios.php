<?php
    class Funcionarios
    {
        private $funcionarios;

        public function __construct()
        {
            $this->funcionarios = [
                ['Id' => 4, 'Nome' => 'João', 'Salário' => 1500],
                ['Id' => 21, 'Nome' => 'José', 'Salário' => 1230.50],
                ['Id' => 34, 'Nome' => 'Maria', 'Salário' => 1678.54],
            ];
        }

        public function all()
        {
            return $this->funcionarios;
        }

        public function find($id)
        {
            foreach($this->funcionarios as $func)
            {
                if($func['Id'] == $id)
                {
                    return $func;
                }
            }
            return null;
        }
    }


?>