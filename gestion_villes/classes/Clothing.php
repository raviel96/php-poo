<?php
class Clothing {
 
    private string $color;
    private int $size;
    private int $price;

    public function __construct(string $color, int $size, int $price) {
        $this->color = $color;
        $this->size = $size;
        $this->price = $price;
    }


}

?>