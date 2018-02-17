<?php

$valor = 0;

if(count($_POST) && isset($_POST['op'])){
    if($_POST['op'] == "soma"){
        $valor = $_POST['n1'] + $_POST['n2'];
    }
    elseif($_POST['op'] == "subtracao"){
        $valor = $_POST['n1'] - $_POST['n2'];
    }
    elseif($_POST['op'] == "multiplicacao"){
        $valor = $_POST['n1'] * $_POST['n2'];
    }
    elseif($_POST['op'] == "divisao"){
        if($_POST['n2'] != 0){
            $valor = $_POST['n1'] / $_POST['n2'];
        }
        else{
            $valor = "Divisão inválida!";
        }
    }
}

?>