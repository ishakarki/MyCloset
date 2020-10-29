<?php include 'clothing.php';
include 'closet.php';

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