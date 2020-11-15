<?php 
include 'clothing.php';
include 'closet.php';

//60 above temp 30F and below
//30-60 temp 30F-60F

class Generator{
    // do we store outfits here or in Closet?

    function pick_out($temp,$mycloset)
    {
        if ($temp>=70) 
        {
            // summer clothes, pick items with temp less than 8
            // sweaters gets reset to empty since no sweaters in summer hehe
            $mycloset->filtersweaters = array();

            // holds filter arrays so we can change filter arrays again after temp check
            $tempbottoms = $mycloset->filterbottoms;
            $tempshirts = $mycloset->filtershirts;
            $temponepieces = $mycloset->filteronepieces;

            // emptying filters to be filled in again
            $mycloset->filterbottoms = array();
            $mycloset->filtershirts = array();
            $mycloset->filteronepieces = array();

            for($i=0; $i < count($tempbottoms);$i++)
            {
                // specified value we picked for summer clothes
                if($tempbottoms[$i]->get_temp()<=8)
                {
                    array_push($mycloset->filterbottoms,$tempbottoms[$i]);
                }
            }

            for($i=0; $i < count($tempshirts);$i++)
            {
                // specified value we picked for summer clothes
                if($tempshirts[$i]->get_temp()<=8)
                {
                    array_push($mycloset->filtershirts,$tempshirts[$i]);
                }
            }

            for($i=0; $i < count($temponepieces);$i++)
            {
                // specified value we picked for summer clothes
                if($temponepieces[$i]->get_temp()<=8)
                {
                    array_push($mycloset->filteronepieces,$temponepieces[$i]);
                }
            }
        }
        elseif ($temp<30) 
        {
            // winter clothes, pick items with temp greater than or equal to 8
            $tempbottoms = $mycloset->filterbottoms;
            $tempshirts = $mycloset->filtershirts;
            $tempsweaters = $mycloset->filtersweaters;
            $temponepieces = $mycloset->filteronepieces;

            // resetting filters
            $mycloset->filterbottoms = array();
            $mycloset->filtershirts = array();
            $mycloset->filtersweaters = array();
            $mycloset->filteronepieces = array();

            for($i=0; $i < count($tempbottoms);$i++)
            {
                // specified value we picked for winter clothes
                if($tempbottoms[$i]->get_temp()>=8)
                {
                    array_push($mycloset->filterbottoms,$tempbottoms[$i]);
                }
            }

            for($i=0; $i < count($tempshirts);$i++)
            {
                // specified value we picked for winter clothes
                if($tempshirts[$i]->get_temp()>=8)
                {
                    array_push($mycloset->filtershirts,$tempshirts[$i]);
                }
            }

            for($i=0; $i < count($tempsweaters);$i++)
            {
                // specified value we picked for winter clothes
                if($tempsweaters[$i]->get_temp()>=8)
                {
                    array_push($mycloset->filtersweaters,$tempsweaters[$i]);
                }
            }

            for($i=0; $i < count($temponepieces);$i++)
            {
                // specified value we picked for winter clothes
                if($temponepieces[$i]->get_temp()>=8)
                {
                    array_push($mycloset->filteronepieces,$temponepieces[$i]);
                }
            }
        }
        else 
        {
            // spring/fall clothes, pick items with temp between 6 and 20
            $tempbottoms = $mycloset->filterbottoms;
            $tempshirts = $mycloset->filtershirts;
            $tempsweaters = $mycloset->filtersweaters;
            $temponepieces = $mycloset->filteronepieces;

            // resetting filters
            $mycloset->filterbottoms = array();
            $mycloset->filtershirts = array();
            $mycloset->filtersweaters = array();
            $mycloset->filteronepieces = array();

            for($i=0; $i < count($tempbottoms);$i++)
            {
                // specified value we picked for spring/winter  clothes
                if($tempbottoms[$i]->get_temp()>=6 && $tempbottoms[$i]->get_temp()<=20)
                {
                    array_push($mycloset->filterbottoms,$tempbottoms[$i]);
                }
            }

            for($i=0; $i < count($tempshirts);$i++)
            {
                // specified value we picked for spring/winter  clothes
                if($tempshirts[$i]->get_temp()>=6 && $tempshirts[$i]->get_temp()<=20)
                {
                    array_push($mycloset->filtershirts,$tempshirts[$i]);
                }
            }

            for($i=0; $i < count($tempsweaters);$i++)
            {
                // specified value we picked for sspring/winter clothes
                if($tempsweaters[$i]->get_temp()>=6 && $tempsweaters[$i]->get_temp()<=20)
                {
                    array_push($mycloset->filtersweaters,$tempsweaters[$i]);
                }
            }

            for($i=0; $i < count($temponepieces);$i++)
            {
                // specified value we picked for spring/winter  clothes
                if($temponepieces[$i]->get_temp()>=6 && $temponepieces[$i]->get_temp()<=20)
                {
                    array_push($mycloset->filteronepieces,$temponepieces[$i]);
                }
            }
        }
    }

    // passes in temperature value, occasion type, and Closet object
    function find_options($temperature, $occasion, $mycloset){

        // resetting filter arrays from any previous usages
        $mycloset->filterbottoms = array();
        $mycloset->filtershirts = array();
        $mycloset->filtersweaters = array();
        $mycloset->filteronepieces = array();

        // filling the filter arrays from mycloset with those that match the occasion
        $mycloset->filterbottoms = $mycloset->get_bottoms($occasion);
        // for($i = 0; $i < count($arraybottoms); $i++)
        // {
        //     echo $arraybottoms[$i]->get_type();
        //     echo "<br>";
        // }
        $mycloset->filtershirts = $mycloset->get_shirts($occasion);
        $mycloset->filtersweaters = $mycloset->get_sweaters($occasion);
        $mycloset->filteronepieces = $mycloset->get_onepieces($occasion);

        // pick_out($temperature,$mycloset);
    }
    // function color_match(){echo 'colormatch';}
    // function save_outfit(){echo 'outfit';} // if we have an outfit array in closet,, set_outfit?
}

// this doesn't work???? error ????????

// $mycloset = new Closet();
// $pant = new Bottom('pant','white',False,2,'pants.png');
// // echo $pant->get_temp();
// $skirt = new Bottom('skirt','black',5,False,3,'skirt.png');
// $jean = new Bottom('jean','blue',5,False,2,'jean.png');

// $mycloset->insert_bottom($pant);
// $mycloset->insert_bottom($skirt);
// $mycloset->insert_bottom($jean);

// $g = new Generator();
// $g->find_options(70,2,$mycloset);