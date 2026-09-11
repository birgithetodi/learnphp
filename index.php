<?php

class Box {
    public static $count = 0;
    public function __construct(public $w, public $h, public $l){
        self::$count++;
    }

    public function volume(){
        return $this->w * $this->h * $this->l;
    }
    public static function me(){
        var_dump(self::class);
        var_dump(static::class);
    }
}

class MetalBox extends Box {

}

Box::$count = 1;
Box::$count = 2;
Box::me();
MetalBox::me();
var_dump(Box::$count, Box::$count);