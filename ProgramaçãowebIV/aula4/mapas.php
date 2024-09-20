<?php

    $frutas = array("Morango","Maçã","Abacaxi");  //array classico cok posições 0, 1, 2;

    echo "<p>".$frutas[0]."</p>"; //Mostra o que está na casa 0.

    $frutas[0] = "Laranja"; //Mudou as informações na casa 0.

    $frutas["fruta"] = 15;

    $cores[0] = "azul";
    $cores["cor"] = "Laranja";

    $mapa = [
       "valor1" => 1,
       "valor2" => 2,
       "valor3" => 3
    ];

    var_dump($cores);
    print_r($mapa); // print_r é somente para mapas

    asort($frutas);
    //ksort($frutas);
    //foreach($frutas as $valor)
    foreach($frutas as $chave => $valor){
        echo "<p>Na posição $chave temos a fruta: $valor</p>";
    }
