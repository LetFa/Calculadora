<?php
    
    if($_POST) {
        $valor = $_POST['valor'];
        $valor2 = $_POST['valor2'];
        $opcao = $_POST['opcao'];
    }
    if(($valor == 0) || ($valor2 == 0)){
        echo "</br><p style='color:red'>[ERRO]Valor inválido!</p>";
    }else 
    switch ($opcao) {
        case 'op1':
             $total = $valor + $valor2;
             echo "Resultado da Adição: ".$total;
            break;
            case 'op2':
                $total = $valor * $valor2;
                echo "Resultado da Multiplicação: ".$total;
               break;
               case 'op3':
                $total = $valor - $valor2;
                echo "Resultado da subtração: ".$total;
               break;
               case 'op4':
                $total = $valor / $valor2;
                echo "Resultado da Divisão: ".$total;
               break;
            default:
               echo "escolha uma opção";
            break;
    }
    
   
   
?>