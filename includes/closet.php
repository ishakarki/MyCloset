<?php include 'clothing.php';

class Closet {
    private $bottoms = [];
    private $shirts = [];
    private $sweaters = [];
    private $onepieces = [];

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