<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API com cURL</title>
</head>
<body>
    <?php
    $url = "https://swapi.py4e.com/api/people/?page=2";
    $ch = curl_init($url); //inicializa o cURL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    $resultado = json_decode(curl_exec($ch));

    #var_dump($resultado);

    foreach ($resultado->results as $ator) {
        #var_dump($ator);
        echo "Ator: " . $ator->name . "</br>";
        echo "Altura: " . $ator->height . "cm</br>";

        foreach ($ator->films as $filme) {
            echo "Filme: " . $filme . "</br>";
        }

        echo "<hr>";
    }
    ?>
</body>
</html>