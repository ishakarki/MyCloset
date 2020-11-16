<?php 
include_once('closet.php');

//60 above temp 30F and below
//30-60 temp 30F-60F

class OutfitCreator{
    // do we store outfits here or in Closet?
    private $closet;

    function __construct($cl)
    {
        $this->closet = $cl;
    }

    function pick_out($temp)
    {
        if ($temp>=70) 
        {
            // summer clothes, pick items with temp less than 8
            // sweaters gets reset to empty since no sweaters in summer hehe
            $this->closet->filtersweaters = array();

            // holds filter arrays so we can change filter arrays again after temp check
            $tempbottoms = $this->closet->filterbottoms;
            $tempshirts = $this->closet->filtershirts;
            $temponepieces = $this->closet->filteronepieces;

            // emptying filters to be filled in again
            $this->closet->filterbottoms = array();
            $this->closet->filtershirts = array();
            $this->closet->filteronepieces = array();

            for($i=0; $i < count($tempbottoms);$i++)
            {
                // specified value we picked for summer clothes
                if($tempbottoms[$i]->get_temp()<=8)
                {
                    array_push($this->closet->filterbottoms,$tempbottoms[$i]);
                }
            }

            for($i=0; $i < count($tempshirts);$i++)
            {
                // specified value we picked for summer clothes
                if($tempshirts[$i]->get_temp()<=8)
                {
                    array_push($this->closet->filtershirts,$tempshirts[$i]);
                }
            }

            for($i=0; $i < count($temponepieces);$i++)
            {
                // specified value we picked for summer clothes
                if($temponepieces[$i]->get_temp()<=8)
                {
                    array_push($this->closet->filteronepieces,$temponepieces[$i]);
                }
            }
        }
        elseif ($temp<30) 
        {
            // winter clothes, pick items with temp greater than or equal to 8
            $tempbottoms = $this->closet->filterbottoms;
            $tempshirts = $this->closet->filtershirts;
            $tempsweaters = $this->closet->filtersweaters;
            $temponepieces = $this->closet->filteronepieces;

            // resetting filters
            $this->closet->filterbottoms = array();
            $this->closet->filtershirts = array();
            $this->closet->filtersweaters = array();
            $this->closet->filteronepieces = array();

            for($i=0; $i < count($tempbottoms);$i++)
            {
                // specified value we picked for winter clothes
                if($tempbottoms[$i]->get_temp()>=8)
                {
                    array_push($this->closet->filterbottoms,$tempbottoms[$i]);
                }
            }

            for($i=0; $i < count($tempshirts);$i++)
            {
                // specified value we picked for winter clothes
                if($tempshirts[$i]->get_temp()>=8)
                {
                    array_push($this->closet->filtershirts,$tempshirts[$i]);
                }
            }

            for($i=0; $i < count($tempsweaters);$i++)
            {
                // specified value we picked for winter clothes
                if($tempsweaters[$i]->get_temp()>=8)
                {
                    array_push($this->closet->filtersweaters,$tempsweaters[$i]);
                }
            }

            for($i=0; $i < count($temponepieces);$i++)
            {
                // specified value we picked for winter clothes
                if($temponepieces[$i]->get_temp()>=8)
                {
                    array_push($this->closet->filteronepieces,$temponepieces[$i]);
                }
            }
        }
        else 
        {
            // spring/fall clothes, pick items with temp between 6 and 20
            $tempbottoms = $this->closet->filterbottoms;
            $tempshirts = $this->closet->filtershirts;
            $tempsweaters = $this->closet->filtersweaters;
            $temponepieces = $this->closet->filteronepieces;

            // resetting filters
            $this->closet->filterbottoms = array();
            $this->closet->filtershirts = array();
            $this->closet->filtersweaters = array();
            $this->closet->filteronepieces = array();

            for($i=0; $i < count($tempbottoms);$i++)
            {
                // specified value we picked for spring/winter  clothes
                if($tempbottoms[$i]->get_temp()>=6 && $tempbottoms[$i]->get_temp()<=20)
                {
                    array_push($this->closet->filterbottoms,$tempbottoms[$i]);
                }
            }

            for($i=0; $i < count($tempshirts);$i++)
            {
                // specified value we picked for spring/winter  clothes
                if($tempshirts[$i]->get_temp()>=6 && $tempshirts[$i]->get_temp()<=20)
                {
                    array_push($this->closet->filtershirts,$tempshirts[$i]);
                }
            }

            for($i=0; $i < count($tempsweaters);$i++)
            {
                // specified value we picked for sspring/winter clothes
                if($tempsweaters[$i]->get_temp()>=6 && $tempsweaters[$i]->get_temp()<=20)
                {
                    array_push($this->closet->filtersweaters,$tempsweaters[$i]);
                }
            }

            for($i=0; $i < count($temponepieces);$i++)
            {
                // specified value we picked for spring/winter  clothes
                if($temponepieces[$i]->get_temp()>=6 && $temponepieces[$i]->get_temp()<=20)
                {
                    array_push($this->closet->filteronepieces,$temponepieces[$i]);
                }
            }
        }

        echo 'filtered bottoms array has: <br>';
        for($i = 0; $i < count($this->closet->filterbottoms); $i++)
        {
            echo $this->closet->filterbottoms[$i]->get_type(),' ',$this->closet->filterbottoms[$i]->get_color(),'<br>';
        }
        echo '<br>';

        echo 'filtered shirts array has: <br>';
        for($i = 0; $i < count($this->closet->filtershirts); $i++)
        {
            echo $this->closet->filtershirts[$i]->get_type(),' ',$this->closet->filtershirts[$i]->get_color(),'<br>';
        }
        echo '<br>';

        if(!empty($this->closet->filtersweaters))
        {
            echo 'filtered sweaters array has: <br>';
            for($i = 0; $i < count($this->closet->filtersweaters); $i++)
            {
                echo $this->closet->filtersweaters[$i]->get_type(),' ',$this->closet->filtersweaters[$i]->get_color(),'<br>';
            }
            echo '<br>';
        }

        echo 'filtered onepieces array has: <br>';
        for($i = 0; $i < count($this->closet->filteronepieces); $i++)
        {
            echo $this->closet->filteronepieces[$i]->get_type(),' ',$this->closet->filteronepieces[$i]->get_color(),'<br>';
        }
        echo '<br>';

    }

    // passes in temperature value, occasion type
    function searchForOptions($temperature, $occasion){

        // resetting filter arrays from any previous usages
        $this->closet->filterbottoms = array();
        $this->closet->filtershirts = array();
        $this->closet->filtersweaters = array();
        $this->closet->filteronepieces = array();

        // filling the filter arrays from mycloset with those that match the occasion
        $this->closet->filterbottoms = $this->closet->get_bottoms($occasion);
        // for($i = 0; $i < count($this->closet->filterbottoms); $i++)
        // {
        //     echo $this->closet->filterbottoms[$i]->get_type();
        // }
        $this->closet->filtershirts = $this->closet->get_shirts($occasion);
        $this->closet->filtersweaters = $this->closet->get_sweaters($occasion);
        $this->closet->filteronepieces = $this->closet->get_onepieces($occasion);

        $this->pick_out($temperature,$this->closet);
    }
    function color_match()
    {
        
    }
    function random_outfit()
    {
        // array_rand returns the key/index of the array's random choice
        // echo rand(0,1);
        if(rand(0,1)==0) // randomly picking 0 or 1
        // if 0, then choose shirt/bottom combo
        {
            $b = array_rand($this->closet->filterbottoms);
            echo $b,' index: random bottom is ',$this->closet->filterbottoms[$b]->get_type(),' ',$this->closet->filterbottoms[$b]->get_color(),'<br>';
            $sh = array_rand($this->closet->filtershirts);
            echo $sh,' index: random shirt is ',$this->closet->filtershirts[$sh]->get_type(),' ',$this->closet->filtershirts[$sh]->get_color(),'<br>';
        }
        else
        // if 1, choose onepiece
        {
            $o = array_rand($this->closet->filteronepieces);
            echo $o,' index: random onepiece is ',$this->closet->filteronepieces[$o]->get_type(),' ',$this->closet->filteronepieces[$o]->get_color(),'<br>';
        }
        if(!empty($this->closet->filtersweaters))
        {
            $sw = array_rand($this->closet->filtersweaters);
            echo $sw,' index: random sweater is ',$this->closet->filtersweaters[$sw]->get_type(),' ',$this->closet->filtersweaters[$sw]->get_color(),'<br>';
        }
    }
    // function save_outfit(){echo 'outfit';} // if we have an outfit array in closet,, set_outfit?
}
/////////////// testing ////////////////

$mycloset = new Closet();
$b1 = new Bottom('pant','white',False,2,'pants.png');
$b2 = new Bottom('skirt','black',False,3,'skirt.png');
$b3 = new Bottom('shorts','blue',False,2,'jean.png');
$b4 = new Bottom('shorts','black',False,2,'s1.png');
$b5 = new Bottom('skirt','pink',False,2,'s2.png');

$sh1 = new Shirt('longshirt','white',False,2,'sh1.png');
$sh2 = new Shirt('tshirt','blue',False,3,'sh2.png');
$sh3 = new Shirt('blouse','pink',False,2,'sh2.png');
$sh4 = new Shirt('tshirt','black',False,3,'sh4.png');
$sh5 = new Shirt('tank top','yellow',False,2,'sh5.png');

$sw1 = new Sweater('jacket','black',False,2,'sw1.png');
$sw2 = new Sweater('pullover','brown',False,2,'sw2.png');
$sw3 = new Sweater('cardigan','white',False,3,'sw3.png');
$sw4 = new Sweater('pullover','pink',False,3,'sw4.png');

$o1 = new Onepiece('short dress','red',False,3,'o1.png');
$o2 = new Onepiece('long dress','black',False,3,'o2.png');
$o3 = new Onepiece('jumpsuit','yellow',False,2,'o3.png');
$o4 = new Onepiece('short dress','yellow',False,2,'o4.png');
$o5 = new Onepiece('long dress','pink',False,2,'o5.png');

$mycloset->insert_bottom($b1);
$mycloset->insert_bottom($b2);
$mycloset->insert_bottom($b3);
$mycloset->insert_bottom($b4);
$mycloset->insert_bottom($b5);

$mycloset->insert_shirt($sh1);
$mycloset->insert_shirt($sh2);
$mycloset->insert_shirt($sh3);
$mycloset->insert_shirt($sh4);
$mycloset->insert_shirt($sh5);

$mycloset->insert_sweater($sw1);
$mycloset->insert_sweater($sw2);
$mycloset->insert_sweater($sw3);
$mycloset->insert_sweater($sw4);

$mycloset->insert_onepiece($o1);
$mycloset->insert_onepiece($o2);
$mycloset->insert_onepiece($o3);
$mycloset->insert_onepiece($o4);
$mycloset->insert_onepiece($o5);

$mycloset->print_bottoms();
$mycloset->print_shirts();
$mycloset->print_sweaters();
$mycloset->print_onepieces();

$g = new OutfitCreator($mycloset);
$g->searchForOptions(70,2);
$g->random_outfit();