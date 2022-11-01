<?php
//API a consumir: https://developers.dailymotion.com/

$url="https://api.dailymotion.com/videos?channel=sport&limit=10";

// _______________________________________________________________ 
/* $opciones desactiva el protocolo de seguridad htts de la api, para poder 
recuperar los datos de JSON a un formato más legible*/
$opciones= array("ssl"=>array("verify_peer"=>false, "verify_peer_name"=>false));
// _______________________________________________________________

$respuesta=file_get_contents($url,false,stream_context_create($opciones));
//file_get_contents: Reads entire file into a string
//stream_context_create: Create a stream context

$objRespuesta=json_decode($respuesta);

//print_r($objRespuesta);

//Voy a usar un foreach() para recorrer el contenido de $objRespuesta

foreach($objRespuesta->list as $video){
//print_r($video->title);
//print_r($video->channel);
}
?>
<!-- __________Lista desordenada HTML embebida______________ -->

<!-- Para una mejor presentación: -->

<ul>
    <?php foreach($objRespuesta->list as $video){   ?>

    <li> <?php echo($video->title);?> | <?php echo($video->channel);?> </li>

    <?php } ?>
</ul>