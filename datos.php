<?php


$tiempo_envio = array(

    "Normal 7 a 10 dias" => 0,
    "Rapido 1 a 3 días" => 20,
    "24 horas"=> 100 
);

$fecha_entrega = array("29/11/2022","30/11/2022","1/12/2022","2/12/2022",
    "5/12/2022","6/12/2022","7/12/2022","8/12/2022","9/12/2022",
    "12/12/2022","13/12/2022","14/12/2022","15/12/2022","16/12/2022",
    "19/12/2022","20/12/2022","21/12/2022","22/12/2022","23/12/2022",
    "26/12/2022","27/12/2022","28/12/2022","29/12/2022","30/12/2022"
);

//Volumen en cm3
$paquetes_tamano = array(
    "pequeno"=>   250000,  //63
    "mediano_1"=> 500000, //79
    "mediano_2"=>1000000, //100
    "grande_1"=> 3000000, //135
    "grande_2"=> 5000000  //171
);

//Categoria en funcion de peso maximo
$paquetes_peso = array(
    "ligero" => 1,
    "ligero-medio" => 10,
    "medio" => 20,
    "medio-pesado" => 50,
    "pesado"=> 100,
    "limite"=> 300

);

//tarifa en funcion del peso
$tarifas =array(
    "ligero" => 1,
    "ligero-medio" => 1.2,
    "medio" => 1.4,
    "medio-pesado" => 2,
    "pesado"=> 3,
    "limite"=> 4
);

?>