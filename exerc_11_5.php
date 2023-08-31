
<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $numerador = $_POST["numerador"];    
    $denominador = $_POST["denominador"]; 

    $divisao = $numerador/$denominador;

    echo "O resultado da divisão é igual a : " . $divisao;



    

}
    
    

?>