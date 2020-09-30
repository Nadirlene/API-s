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
    $resultado = json_decode(curl_exec($ch));

    var_dump($resultado);
    ?>
</body>
</html>