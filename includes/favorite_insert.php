<?php
if(isset($_POST['test']))
{
    echo '<h1>Hello!</h1>';
    $p1 = $_POST['piece1'];
    $p2 = $_POST['piece2'];
    $p3 = $_POST['piece3'];

    echo $p1;
    echo $p2;
    echo $p3;

}
else{
    echo'What';
}