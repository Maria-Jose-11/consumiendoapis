<?php

$identificador=1;

$curlinit= curl_init();

curl_setopt($curlinit, CURLOPT_URL, "https://pokeapi.co/api/v2/pokemon/$identificador/");

curl_setopt($curlinit, CURLOPT_RETURNTRANSFER, TRUE);

$respuesta=curl_exec($curlinit);

curl_close($curlinit);

$valores=json_decode($respuesta, TRUE);

echo "El nombre del pokemon es: ", $valores['name']

?>