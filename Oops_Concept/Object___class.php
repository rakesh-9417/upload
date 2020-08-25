<?php 

class TV {
	public $model='xyz';
	public $volume = 1;

	function volume_up()
	{
		$this->volume++;

	}

	function volume_down()
	{
		$this->volume--;
		
	}


}

$tv_one = new TV;
$tv_two = new TV;


$tv_one->volume_up();


echo $tv_one->volume;
 //why only volume here 
//why we had not used $volume here
//https://www.youtube.com/watch?v=0-0d0cDtz-E&list=PLHFGzOr0F8DLu2_ihXK21Pr4MrpBFwrEC
// 11:16

 ?>