<?php

class Box {


    public function __construct(public int $width, private int $height, protected int $length){
        var_dump("Box was created");
    }

    public function volume(){
        return $this->width * $this->height * $this->length;
    }

    public function __set($name, $value) {
        var_dump("Setting '$name' to '$value'");
    }

    public function __get($name) {
        var_dump("Getting '$name'");
        return 'some value';
    }

    public function __call($name, $arguments) {
        var_dump($name, $arguments);
        
    }

    public function __invoke($arguments) {
        var_dump($arguments);
    }

    public function __toString(){
        return "Im a box";
    }

    public function __destruct(){
        var_dump("Box was destroyed");
    }

}

function test() {
    $box2 = new Box(1, 2, 3);
}
test();

for($i=0; $i<10; $i++){
    $box2 =new Box(1, 2, 3);
}

$box = new Box(1, 2, 3);
$box->hello = 'yolo';
var_dump($box->yolo);
$box->cool(1, 'lol', 42);
$box(1, 'yes');

$box= 1;
var_dump($box);
echo $box;
