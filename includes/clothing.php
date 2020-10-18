<?php

class Clothing{
    private $type;
    private  $color;
    private $temp;
    private $pattern;
    private $occasion;
    private $file_title;
    function __contruct($type, $color, $temp, $pattern, $occasion, $file_title)
    {
        $this->type = $type;
        $this->color = $color;
        $this->temp = $temp;
        $this->pattern = $pattern;
        $this->occasion = $occasion;
        $this->file_title = $file_tile;
    }
    function get_type(){return $this->type;}
    function get_color(){return $this->color;}
    function get_temp(){return $this->temp;}
    function get_pattern(){return $this->pattern;}
    function get_occasion(){return $this->occasion;}
    function get_file_title(){return $this->file_title;}
};