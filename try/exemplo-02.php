<?php

function trataNome($name){

    if(!$name){

        throw new Exception("Nenhum nome foi informado");

    }

    echo ucfirst($name) . "<br>";

}

try{

    trataNome("Wallace");
    trataNome("");

}catch(Exception $e){

    echo $e->getMessage();

}finally{

    echo "Executou o bloco Try!";

}

?>