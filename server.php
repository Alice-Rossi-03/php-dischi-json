<?php

// prendiamo il contenuto dello store.json e lo trasformiamo in stringa
$string = file_get_contents('store.json');

// lo trasformiamo in un array associativo 
$list = json_decode($string, true);
// var_dump($list);

// condizione del click
if(isset($_POST['songIndex'])){
    $song_index = $_POST['songIndex'];
    $song = $list[$song_index];
    $list = $song;
};

header('Content-Type: application/json'); 

// ricodifichiamo l'array in stringa json
echo json_encode($list);

?>