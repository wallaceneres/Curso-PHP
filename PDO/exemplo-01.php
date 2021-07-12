<?php
//prepara a conexao

$conn = new PDO ("mysql:dbname=dbphp7;host=localhost","root","");
//pepara o comando no banco de dados
$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
// executa
$stmt->execute();
// salva o resultado na variavel results(Fetchall: fatia em pedacos, pdo::fetch_assoc: forca o retorno de somente os dados)
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//percorre o primeiro array dividindo cada resultado em outro array
foreach($results as $row){
//percorre o segundo array dividindo chave e valor
    foreach($row as $key => $value){

        echo "<strong>" . $key . ": </strong>" . $value .  "<br>";

    }

    echo "========================================================<br>";

}


?>