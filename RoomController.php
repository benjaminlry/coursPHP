<?php

include 'Room.php';


//$roomJson = ",{'numRoom': ".$_POST['numRoom'].",'numFloor': ".$_POST['numFloor']." }";
//var_dump($roomJson);

//print "<br>";

$inputNumRoom = $_POST["numRoom"];
$inputNumFloor = $_POST["numFloor"];

$str = file_get_contents('db.json');
$arr = json_decode($str, true);
$arrne['numRoom'] = intval($inputNumRoom);
$arrne['numFloor'] = intval($inputNumFloor);
array_push($arr['Rooms'], $arrne);
$str = json_encode($arr);

if (json_decode($str) != null) {
    $file = fopen('db.json', 'w');
    fwrite($file, $str);
    fclose($file);
    print (new Room($inputNumRoom, $inputNumFloor)) . " a été crée";
} else {

}

?>
<br>
<a href='/coursPhpTest'>Accueil</a>