<?php
ini_set('display_errors', 0 );

$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_SPECIAL_CHARS);

$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);

$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_SPECIAL_CHARS);

$url = "https://viacep.com.br/ws/".$estado."/".$cidade."/".$rua."/json";

$resultado = json_decode(file_get_contents($url));


if ($estado == "") {

    header("Refresh:1; url=index.php");
    echo "Preencha o Estado!";
    

}


// echo $url;

/*
echo '<pre>';
var_dump($resultado);
echo '</pre>'; 
*/

?>

<a href="index.php">Voltar</a>
<br><br>
<?php

foreach ($resultado as $valor) {
    echo "CEP: ".$valor->cep."<br>";
    echo "Rua: ". $valor->logradouro."<br>";
    echo "Complemento: ". $valor->complemento."<br>";
    echo "Bairro: ". $valor->bairro."<br>";
    echo "Cidade: ". $valor->localidade."<br>";
    echo "Estado: ". $valor->uf."<br>";
    echo "DDD: ". $valor->ddd."<br>";
    echo "<hr>";
}

?>

<a href="index.php">Voltar</a>