<?php

//https://www.tutorialspoint.com/php/php_design_patterns.htm

abstract class Clothing{
    protected $name;
    protected $type;
    protected $color;
    protected $temp;
    protected $pattern;
    protected $occasion;
    protected $file_title;
    function __construct($na, $ty, $co, $pa, $oc, $ft)
    {
        // echo "this is inside the constructor";
        $this->name = $na; // string
        $this->type = $ty; // string 
        $this->color = $co; // string
        //$this->temp = $te; // int
        $this->pattern = $pa; // bool
        $this->occasion = $oc; // int level
        $this->file_title = $ft; // string
        $this->set_temp($ty);
    }
    //get functions
    function get_name(){ return $this->name; }
    function get_type(){return $this->type;}
    function get_color(){return $this->color;}
    function get_temp(){return $this->temp;}
    function get_pattern(){return $this->pattern;}
    function get_occasion(){return $this->occasion;}
    function get_file_title(){return $this->file_title;}
    abstract protected function set_temp($ty);

}

class ClothingFactory{
    public static function create($na, $ty, $co, $pa, $oc, $ft)
    {
        return new Clothing ($na, $ty, $co, $pa, $oc, $ft);
    }
}

class Bottom extends Clothing {
    // type can be: pants, shorts, skirt

    //pants: 15
    //shorts and skirt: 6

    function set_temp($ty)
    {
        if($ty == 'Pant')
        {
            $this->temp = 15;
        }
        else if ($ty == 'Short' || $ty == 'Skirt')
        {
            $this->temp = 6;
        }
    }
}

//implementation of the factory design pattern for bottom

class BottomFactory{
    public static function create($na, $ty, $co, $pa, $oc, $ft)
    {
        return new Bottom ($na, $ty, $co, $pa, $oc, $ft);
    }
}



class Shirt extends Clothing {
    // tshirt, long shirt, tanktop, blouse

    // longshirt: 15
    //tshirt, blouse: 8
    //tank top: 5

    function set_temp($ty)
    {
        if($ty == 'Long Sleeve')
        {
            $this->temp = 15;
        }
        else if ($ty == 'T-Shirt' || $ty == 'Blouse')
        {
            $this->temp = 8;
        }
        else if ($ty == 'Tank Top')
        {
            $this->temp = 5;
        }
    }
}

//implementation of the factory design pattern for the shirt


class ShirtFactory{
    public static function create($na, $ty, $co, $pa, $oc, $ft)
    {
        return new Shirt ($na, $ty, $co, $pa, $oc, $ft);
    }
}

class Sweater extends Clothing {
    // jacket, pullover

    //jacket: 40
    //pullover: 20
    //cardigan: 6

    function set_temp($ty)
    {
        if($ty == 'Jacket')
        {
            $this->temp = 40;
        }
        else if($ty == 'Pullover')
        {
            $this->temp = 20;
        }
        else if($ty == 'Cardigan')
        {
            $this->temp = 6;
        }
    }

}

//implementation of the factory design pattern for the sweater


class SweaterFactory{
    public static function create($na, $ty, $co, $pa, $oc, $ft)
    {
        return new Sweater ($na, $ty, $co, $pa, $oc, $ft);
    }
}

class Onepiece extends Clothing {
    // long dress, jumpsuit, short dress

    //long dress, jumpsuit: 20
    //shortdress: 5

    function set_temp($ty)
    {
        if($ty == 'Short Dress' || $ty == 'Romper')
        {
            $this->temp = 5;
        }
        else if ($ty == 'Long Dress' || $ty == 'Jump Suit')
        {
            $this->temp = 20;
        }
    }
    
}

//implementation of the factory design pattern for the one piece


class OnepieceFactory{
    public static function create($na, $ty, $co, $pa, $oc, $ft)
    {
        return new Onepiece ($na, $ty, $co, $pa, $oc, $ft);
    }
}