<?php
    class flower {
        public $color; //string
        public $name; //string

            public function __construct($color, $name)
            {
                $this->color = $color;
                $this->name = $name;
            }



    }
    $flower1 = new Flower("Zonnebloem", "Geel");
    $flower2 = new Flower("Paardebloem", "Roze");

    var_dump($flower1);
    echo("</br>");
    var_dump($flower2);
    echo("</br>");

    $flower1->color("Geell");
    


?>