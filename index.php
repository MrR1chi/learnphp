<?php

class Box {
    use HasColor, HasSmell;
    public int $width;
    private int $height;
    protected int $length;

    public function volume(){
        return $this->width * $this->height * $this->length;
    }

    public function setHeight(int $height){
        if($height < 0) {
            $this->height = 0;
        } else {
            $this->height = $height;
        }
    }
    public function getHeight(){
        return $this->height;
    }

    public function test1(){
        $this->length = 10;
        var_dump($this->length);
    }
}

class MetalBox extends Box {
    public int $weightPerUnit;
    public function mass(){
        return $this->volume() * $this->weightPerUnit;
    }

    public function test2(){
        $this->height = 10;
        var_dump($this->height);
    }
}

trait HasColor {
    public $color;
    public function setColor($color){
        $this->color = $color;
    }
}

trait HasSmell {
    public $smell;
    public function setSmell($smell){
        $this->smell = $smell;
    }
}

$box1 = new Box();
$box1->width = 10;
$box1->setHeight(5);
var_dump($box1->getHeight());

$metal1 = new MetalBox();
var_dump($metal1);