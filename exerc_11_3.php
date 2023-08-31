<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num_real = $_POST["num_real"];

    
    echo "O numero real digitado é :  " . $num_real;
}
    
    

?>