<?php

function validaCPF($cpf){
    $cpf = str_split($cpf);
    $mult1 = 11;
    $mult2 = 12;

    $cpfDV1 = $cpf;
    $cpfDV2 = $cpf;

    for($i = 0; $i < sizeOf($cpf); $i++){
        if($i != 9 && 10){
            $mult1--;
            $cpfDV1[$i] *= $mult1;   
        }

        $somaDV1 = array_sum($cpfDV1) - $cpfDV1[9] - $cpfDV1[10];

        $dv1 = $somaDV1 % 11;
        if($dv1 < 2){
            $dv1 = 0;
        }else{
            $dv1 = 11 - $dv1;
        }
    }
    
    for($i = 0; $i < sizeOf($cpf); $i++){
        if($i != 10){
            $mult2--;
            $cpfDV2[$i] *= $mult2;
        }

        $somaDV2 = array_sum($cpfDV2) - $cpf[10];

        $dv2 = $somaDV2 % 11;
        if($dv2 < 2){
            $dv2 = 0;
        }else{
            $dv2 = 11 - $dv2;
        }
    }
  
    if($dv1 == $cpf[9] && $dv2 == $cpf[10]){
        echo '<script> alert("CPF VÁLIDO!")
                       window.location.href="index.php"
              </script>';
        
    }else{
        echo '<script> alert("CPF INVÁLIDO")
                       window.location.href="index.php"
              </script>';
    }

    
}

if($_POST['action'] == 'validaCPF'){
    $cpf = $_POST['cpf'];
    if(filter_var($cpf, FILTER_VALIDATE_INT)){
        if($cpf !== 00000000000 || 11111111111){
            validaCPF($cpf);
        }else{
            echo '<script> alert("CPF INVÁLIDO!")
                       window.location.href="index.php"
              </script>';
        }
    }else{
        echo '<script> alert("Insira apenas números!")
                       window.location.href="index.php"
              </script>';
    }
}

?>