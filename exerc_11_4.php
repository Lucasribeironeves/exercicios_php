<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];   

    $num_dobro = $numero * 2 ; 

    echo "O dobro do numero digitado é igual a: " . $num_dobro;



    

}
    
    

?>