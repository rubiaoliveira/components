<?php

function crocheController(){
    echo "6. Controller recebeu a requisição.<br>";
    $croches = crocheService();
    echo "8. Controller recebeu os dados do Service.<br>";
    echo "<br>★ Pontos de croche encontrados:<br>";
    foreach ($croches as $croche) {
        echo "- " . $croche . "<br>";
    }
}
