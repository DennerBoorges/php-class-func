<?php

    include('Calculadora.php');
    include('Funcionario.php');

    $id = $_POST['id'];

    $calculadora = new Calculadora();
    $funcionarios = new Funcionarios();

    $func = $funcionarios->find($id);

    echo $func['nome'];

?>