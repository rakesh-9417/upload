<?php

class TV
{

    public $model;
    public $volume;

    function volume_up()
    {
        $this->volume++;
    }

    function volume_down()
    {
        $this->volume--;
    }

    function __construct($m, $v)
    {
        $this->model = $m;
        $this->volume = $v;
    }

}
