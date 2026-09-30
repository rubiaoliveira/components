<?php

function serieController(){
    echo "6. Controller recebeu a requisição.<br>";
    $series = serieService();
    echo "8. Controller recebeu os dados do Service.<br>";
    echo "<br>★ Series encontradas:<br>";
    foreach ($series as $serie) {
        echo "- " . $serie . "<br>";
    }
}
