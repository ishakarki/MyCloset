<?php include 'clothing.php';

class Closet {
    private $bottoms = [];
    private $shirts = [];
    private $sweaters = [];
    private $onepieces = [];

    function insert_bottom($input){ array_push($bottoms,$input); }
    function insert_shirt($input){ array_push($shirts,$input); }
    function insert_sweater($input){ array_push($sweaters,$input); }
    function insert_onepiece($input){ array_push($onepieces,$input); }

    // template for returning arrays based on a condition
    function get_bottoms($occasion)
    {
        $matches = []; // array of matched clothes
        foreach($bottoms as $key=>$val) // https://www.dyn-web.com/php/arrays/iterate/
        {
            if(bottoms[$key].get_occasion()==$occasion) // does the .get_occasion() work here?
            {
                array_push($matches,bottoms[$key]);
            }
        }
        return $matches;
    }
}

echo 'Hello! <br/>';

$skirt = new Bottom();
$skirt->set_color('pink');
echo "skirt color is: " . $skirt->get_color() . "<br/>";

$pant = new Clothing('pants','blue',10,false,2,'pants.png');
echo "pant color is " . $pant->get_color();