<?php
include("readdata.php");
include("outfitcreator.php");

if(isset($_POST['request-submit']))
{
    $temperature = $_POST['temperature'];
    $occasion_ = $_POST['occasion_request'];
}