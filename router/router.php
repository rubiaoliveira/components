<?php

function router(){
    echo "2. Router está analisando a URL.<br>";
    $rota = "/serie";
    $parametro = "id=123";
    middleware($rota);
}
