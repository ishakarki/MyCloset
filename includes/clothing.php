<?php

class Clothing{
    protected $type;
    protected $color;
    protected $temp;
    protected $pattern;
    protected $occasion;
    protected $file_title;
    function __contruct($type, $color, $temp, $pattern, $occasion, $file_title)
    {
        $this->type = $type; // string 
        $this->color = $color; // string
        $this->temp = $temp; // int
        $this->pattern = $pattern; // bool
        $this->occasion = $occasion; // int level
        $this->file_title = $file_tile; // string
    }
    function get_type(){return $this->type;}
    function get_color(){return $this->color;}
    function get_temp(){return $this->temp;}
    function get_pattern(){return $this->pattern;}
    function get_occasion(){return $this->occasion;}
    function get_file_title(){return $this->file_title;}
}

class Bottom extends Clothing {
    // type can be: pants, shorts, skirt
}

class Shirt extends Clothing {
    // tshirt, long shirt, tanktop, blouse
}

class Sweater extends Clothing {
    // jacket, pullover
}

class Onepiece extends Clothing {
    // dress, jumpsuit
}