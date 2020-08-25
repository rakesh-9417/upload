<?php 

class TV {
	public $model;
	public $volume ;

	function volume_up()
	{
		$this->volume++;

	}

	function volume_down()
	{
		$this->volume--;
		
	}

	function __construct($m , $v)
	{
		$this->model=$m;
		$this->volume=$v;
		
	}

}
class tvwithtimer extends TV
{
	public $timer = true;
}

$tv= new tvwithtimer('abc' , '2');
echo $tv->model;



class sonytv extends TV
{
public $timer = true;
}

$sonytv = new sonytv ('sonytv' , '5');
echo '<br>';
echo $sonytv->volume;
