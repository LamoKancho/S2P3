<!-- Gemaakt door Embiya Gürses -->

<?php

class Room {
    private $length;
    private $width;
    private $height;

    public function __construct($length, $width, $height) {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }

    public function getVolume() {
        return $this->length * $this->width * $this->height;
    }
}

class House {
    private $rooms;
    private $pricePerCubicMeter;

    public function __construct($pricePerCubicMeter = 1000) {
        $this->rooms = array();
        $this->pricePerCubicMeter = $pricePerCubicMeter;
    }

    public function addRoom(Room $room) {
        $this->rooms[] = $room;
    }

    public function getTotalVolume() {
        $totalVolume = 0;
        foreach ($this->rooms as $room) {
            $totalVolume += $room->getVolume();
        }
        return $totalVolume;
    }

    public function getPrice() {
        return $this->getTotalVolume() * $this->pricePerCubicMeter;
    }
}

$room1 = new Room(5.2, 5.1, 5.5);
$room2 = new Room(4.8, 4.6, 4.9);
$room3 = new Room(5.9, 2.5, 3.1);

$house = new House();
$house->addRoom($room1);
$house->addRoom($room2);
$house->addRoom($room3);

echo "Total Volume: " . $house->getTotalVolume() . " cubic meters </br>";
echo "Total Price: €" . $house->getPrice();

?>
