<?php 
include 'clothing.php';

class Closet {
    private $bottoms = array();
    private $shirts = array();
    private $sweaters = array();
    private $onepieces = array();

    // temporary arrays for the filtered clothes, will reset to empty
    public $filterbottoms = array();
    public $filtershirts = array();
    public $filtersweaters = array();
    public $filteronepieces = array();

    function insert_bottom($input){ array_push($this->bottoms,$input); }
    function insert_shirt($input){ array_push($this->shirts,$input); }
    function insert_sweater($input){ array_push($this->sweaters,$input); }
    function insert_onepiece($input){ array_push($this->onepieces,$input); }

    function print_bottoms()
    {
        echo 'bottoms array has: <br>';
        for($i = 0; $i < count($this->bottoms); $i++)
        {
            echo $this->bottoms[$i]->get_name(),' ',$this->bottoms[$i]->get_color(),' ',$this->bottoms[$i]->get_type(),'<br>';
        }
        echo '<br>';
    }

    function print_shirts()
    {
        echo 'shirts array has: <br>';
        for($i = 0; $i < count($this->shirts); $i++)
        {
            echo $this->shirts[$i]->get_name(),' ',$this->shirts[$i]->get_color(),' ',$this->shirts[$i]->get_type(),'<br>';
        }
        echo '<br>';
    }

    function print_sweaters()
    {
        echo 'sweaters array has: <br>';
        for($i = 0; $i < count($this->sweaters); $i++)
        {
            echo $this->sweaters[$i]->get_name(),' ',$this->sweaters[$i]->get_color(),' ',$this->sweaters[$i]->get_type(),'<br>';
        }
        echo '<br>';
    }

    function print_onepieces()
    {
        echo 'onepieces array has: <br>';
        for($i = 0; $i < count($this->onepieces); $i++)
        {
            echo $this->onepieces[$i]->get_name(),' ',$this->onepieces[$i]->get_color(),' ',$this->onepieces[$i]->get_type(),'<br>';
        }
        echo '<br>';
    }

    // template for returning arrays based on a condition
    function get_bottoms($occasion)
    {
        $matches = array(); // array of matched clothes
        for($i = 0; $i < count($this->bottoms); $i++)
        {
            if($this->bottoms[$i]->get_occasion()==$occasion)
            {
                array_push($matches,$this->bottoms[$i]);
            }
        }
        return $matches;
    }

    function get_shirts($occasion)
    {
        $matches = array(); // array of matched clothes
        foreach($this->shirts as $key=>$val) // https://www.dyn-web.com/php/arrays/iterate/
        {
            if($val->get_occasion()==$occasion)
            {
                $matches[] = $val;
            }
        }
        return $matches;
    }

    function get_sweaters($occasion)
    {
        $matches = array(); // array of matched clothes
        foreach($this->sweaters as $key=>$val) // https://www.dyn-web.com/php/arrays/iterate/
        {
            if($val->get_occasion()==$occasion)
            {
                $matches[] = $val;
            }
        }
        return $matches;
    }

    function get_onepieces($occasion)
    {
        $matches = array(); // array of matched clothes
        foreach($this->onepieces as $key=>$val) // https://www.dyn-web.com/php/arrays/iterate/
        {
            if($val->get_occasion()==$occasion)
            {
                $matches[] = $val;
            }
        }
        return $matches;
    }
}