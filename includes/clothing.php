<?php

class Clothing{
    protected $type;
    protected $color;
    protected $temp;
    protected $pattern;
    protected $occasion;
    protected $file_title;
    function __construct($ty, $co, $te, $pa, $oc, $ft)
    {
        echo "this is inside the constructor";
        $this->type = $ty; // string 
        $this->color = $co; // string
        $this->temp = $te; // int
        $this->pattern = $pa; // bool
        $this->occasion = $oc; // int level
        $this->file_title = $ft; // string
    }
    function get_type(){return $this->type;}
    function get_color(){return $this->color;}
    function get_temp(){return $this->temp;}
    function get_pattern(){return $this->pattern;}
    function get_occasion(){return $this->occasion;}
    function get_file_title(){return $this->file_title;}

    function set_color($color){
        $this->color = $color;
    }
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