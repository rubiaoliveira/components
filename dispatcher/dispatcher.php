<?php

function dispatcher($rota){
    echo "5. Dispatcher decidiu qual controller deve executar.<br>";
    if ($rota === "/croche") {
        crocheController();
    } else if($rota === "/serie"){
        serieController();
    } else{
        echo "Rota não encontrada.";
    }

}