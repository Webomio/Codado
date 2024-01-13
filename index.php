<?php

if(isset($_GET['cpf'])) {
    $cpf = $_GET['cpf'];

    
    $api_url = "https://peopleconsulting.tech/Person/CPF?CPF=" . $cpf;

    
    $api_response = file_get_contents($api_url);

    
    echo $api_response;
} else {
    echo "Por favor, forneÃ§a um CPF na URL, por exemplo: ?cpf=99999999999";
}

?>
