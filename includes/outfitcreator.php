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
        // for($i = 0; $i < count($arraybottoms); $i++)
        // {
        //     echo $arraybottoms[$i]->get_type();
        //     echo "<br>";
        // }
        $this->closet->filtershirts = $this->closet->get_shirts($occasion);
        $this->closet->filtersweaters = $this->closet->get_sweaters($occasion);
        $this->closet->filteronepieces = $this->closet->get_onepieces($occasion);

        $this->pick_out($temperature,$this->closet);
    }
    function color_match(){echo 'colormatch';}
    // function save_outfit(){echo 'outfit';} // if we have an outfit array in closet,, set_outfit?
}

// this doesn't work???? error ????????

echo 'hello FROM GENERATOR???';

$mycloset = new Closet();
$pant = new Bottom('pant','white',False,2,'pants.png');
// echo $pant->get_temp();
$skirt = new Bottom('skirt','black',5,False,3,'skirt.png');
$jean = new Bottom('jean','blue',5,False,2,'jean.png');

$mycloset->insert_bottom($pant);
$mycloset->insert_bottom($skirt);
$mycloset->insert_bottom($jean);

$g = new OutfitCreator($mycloset);
// $g->searchForOptions(70,2,$mycloset);