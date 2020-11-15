<?php

class Clothing{
    protected $type;
    protected $color;
    protected $temp;
    protected $pattern;
    protected $occasion;
    protected $file_title;
    function __construct($ty, $co, $pa, $oc, $ft)
    {
        // echo "this is inside the constructor";
        $this->type = $ty; // string 
        $this->color = $co; // string
        //$this->temp = $te; // int
        $this->pattern = $pa; // bool
        $this->occasion = $oc; // int level
        $this->file_title = $ft; // string
        $this->set_temp($ty);
    }
    function get_type(){return $this->type;}
    function get_color(){return $this->color;}
    function get_temp(){return $this->temp;}
    function get_pattern(){return $this->pattern;}
    function get_occasion(){return $this->occasion;}
    function get_file_title(){return $this->file_title;}
    function set_temp($ty){}

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
            $this->temp = 30;
        }
    }
    
}