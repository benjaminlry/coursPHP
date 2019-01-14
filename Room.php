<?php

// ?int ... si on veut du string ou null
class Room
{
    private $_numRoom;
    private $_numFloor;

    public function __construct($numRoom, $numFloor)
    {
        $this->_numRoom = $numRoom;
        $this->_numFloor = $numFloor;
    }

    public function getNumRoom(): int
    {
        return $this->_numRoom;
    }

    public function setNumRoom(int $value)
    {
        $this->_numRoom = $value;
    }

    public function getNumFloor()
    {
        return $this->_numFloor;
    }

    public function setNumFloor($value)
    {
        $this->_numFloor = $value;
    }

    public function __toString()
    {
        return "Chambre numéro " . $this->getNumRoom() . " à l'étage " . $this->getNumFloor();
    }
}