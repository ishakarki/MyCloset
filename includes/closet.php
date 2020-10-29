<?php include 'clothing.php';

class Closet {
    private $bottoms = array();
    private $shirts = array();
    private $sweaters = array();
    private $onepieces = array();

    function insert_bottom($input)
    {
        $this->bottoms[] = $input;
        //echo '<pre>'; print_r($this->bottoms); echo '</pre>';
    }
    function insert_shirt($input){$this->shirts[] = $input;}
    function insert_sweater($input){ $this->sweaters[] = $input; }
    function insert_onepiece($input){ $this->onepieces[] = $input; }

    // template for returning arrays based on a condition
    function get_bottoms($occasion)
    {
        $matches = array(); // array of matched clothes
        foreach($this->bottoms as $key=>$val) // https://www.dyn-web.com/php/arrays/iterate/
        {
            if($val->get_occasion()==$occasion) // does the .get_occasion() work here?
            {
                $matches[] = $val;
            }
        }
        return $matches;
    }

    function get_shirts($occasion)
    {
        $matches = array(); // array of matched clothes
        foreach($this->shirts as $key=>$val) // https://www.dyn-web.com/php/arrays/iterate/
        {
            if($val->get_occasion()==$occasion) // does the .get_occasion() work here?
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
            if($val->get_occasion()==$occasion) // does the .get_occasion() work here?
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
            if($val->get_occasion()==$occasion) // does the .get_occasion() work here?
            {
                $matches[] = $val;
            }
        }
        return $matches;
    }
}





// echo 'Hello! <br/>';

$mycloset = new Closet();
$pant = new Bottom('pant','white',False,2,'pants.png');
echo $pant->get_temp();
// $skirt = new Bottom('skirt','black',5,False,3,'skirt.png');
// $jean = new Bottom('skirt','blue',5,False,2,'jean.png');

// $mycloset->insert_bottom($pant);
// $mycloset->insert_bottom($skirt);
// $mycloset->insert_bottom($jean);

// $result = $mycloset->get_bottoms(2);

// echo '<pre>'; print_r($result); echo '</pre>';

//  $plainshirt = new Shirt('shirt','white',10,False,2,'pants.png');
//  $shirt = new Shirt('t-shirt','black',5,False,3,'skirt.png');
//  $whiteshirt = new Shirt('blouse','blue',5,True,2,'jean.png');
 
// $mycloset->insert_shirt($plainshirt);
// $mycloset->insert_shirt($shirt);
// $mycloset->insert_shirt($whiteshirt);

// $shirtresult = $mycloset->get_shirts(2);

// echo '<pre>'; print_r($shirtresult); echo '</pre>';
