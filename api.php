<?php

$url = "https://ecommerce.ctec.com.br/wp-json/wp/v2/posts";

$resultado = json_decode(file_get_contents($url));


file_

echo '<pre>';
var_dump($resultado);
echo '</pre>';
