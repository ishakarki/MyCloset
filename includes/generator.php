<?php include 'clothing.php';
include 'closet.php';

//60 above temp 30F and below
//30-60 temp 30F-60F

class Generator{
    // do we store outfits here or in Closet?

    // ignore function definitions just saving the function declarations
    function find_options($temperature, $occasion, $mycloset){
        $arraybottoms = $mycloset->get_bottoms($occasion);
        $arrayshirts = $mycloset->get_shirts($occasion);
        $arrayonepiece = $mycloset->get_onepieces($occasion);
        $arraysweater = $mycloset->get_sweaters($occasion);
    }
    function pick_out(){echo 'out';}
    function color_match(){echo 'colormatch';}
    function save_outfit(){echo 'outfit';}
}