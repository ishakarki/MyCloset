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

    // template for returning arrays based on a condition
    function get_bottoms($occasion)
    {
        $matches = array(); // array of matched clothes
        // foreach($this->bottoms as $key=>$val) // https://www.dyn-web.com/php/arrays/iterate/
        // {
        //     if($val->get_occasion()==$occasion)
        //     {
        //         $matches[] = $val;
        //     }
        // }
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





echo 'Hello! from closet <br/>';

// $mycloset = new Closet();
// $pant = new Bottom('pant','white',False,2,'pants.png');
// echo $pant->get_temp();
// $skirt = new Bottom('skirt','black',5,False,3,'skirt.png');
// $jean = new Bottom('jean','blue',5,False,2,'jean.png');

// $mycloset->insert_bottom($pant);
// $mycloset->insert_bottom($skirt);
// $mycloset->insert_bottom($jean);

// // $result = $mycloset->get_bottoms(2);

// // echo '<pre>'; print_r($result); echo '</pre>';

// $test = array();
// array_push($test,$pant,$skirt,$jean);
// echo "<br>";
// // echo print_r($test);
// for ($i = 0; $i < count($test); $i++)
// {
//     echo "test at ",$i ,$test[$i]->get_type();
//     echo "<br>";
// }

// echo "<br>";

// $foo = array(1,2,3);
// print_r($foo);

// echo "<br>";

// echo count($foo);

// echo "<br>";

// $foo = array();
// print_r($foo);

//  $plainshirt = new Shirt('shirt','white',10,False,2,'pants.png');
//  $shirt = new Shirt('t-shirt','black',5,False,3,'skirt.png');
//  $whiteshirt = new Shirt('blouse','blue',5,True,2,'jean.png');
 
// $mycloset->insert_shirt($plainshirt);
// $mycloset->insert_shirt($shirt);
// $mycloset->insert_shirt($whiteshirt);

// $shirtresult = $mycloset->get_shirts(2);

// echo '<pre>'; print_r($shirtresult); echo '</pre>';
