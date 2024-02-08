<!-- gemaakt door Embiya Gurses -->

<?php

class House {
    private $floor;
    private $rooms;
    private $width;
    private $height;
    private $depth;
    private $volume;
    private $pricePerCubicMeter = 1000; // Assuming a fixed price per m^3

    public function __construct($floor, $rooms, $width, $height, $depth) {
        $this->floor = $floor;
        $this->rooms = $rooms;
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
        $this->setVolume();
    }
    
    private function setVolume() {
        $this->volume = $this->width * $this->height * $this->depth;
    }

    public function getHouse() {
        return "Dit huis heeft {$this->floor} verdiepingen, {$this->rooms} kamers en heeft een volume van {$this->volume} m^3";
    }

    public function getPrice() {
        return "De prijs van het huis is: " . ($this->volume * $this->pricePerCubicMeter);
    }
}


$house1 = new House(2, 4, 10, 10, 10);
$house2 = new House(3, 6, 10, 10, 15);
$house3 = new House(2, 3, 10, 10, 7.5); 


echo $house1->getHouse() . "</br>";
echo $house1->getPrice() . "</br>";

echo $house2->getHouse() . "</br>";
echo $house2->getPrice() . "</br>";

echo $house3->getHouse() . "</br>";
echo $house3->getPrice() . "</br>";

?>