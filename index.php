<?php

include 'Room.php';

?>
    <div>
        <form action="RoomController.php" method="post">
            <input type="number" name="numRoom" placeholder="Numéro de la chambre" required>
            <input type="number" name="numFloor" placeholder="Numéro de l'étage" required>
            <input type="submit">
        </form>
    </div>

<?php

// Chargement des données depuis le fichier json.

$dataJson = file_get_contents("db.json");
$json_a = json_decode($dataJson, true);
foreach ($json_a["Rooms"] as $oneRoom) {
    echo "Chambre numéro " . $oneRoom["numRoom"] . " à l'étage " . $oneRoom["numFloor"];
    echo "<br>";
}

//$myRoom = new Room(123, 2);
//print $myRoom;