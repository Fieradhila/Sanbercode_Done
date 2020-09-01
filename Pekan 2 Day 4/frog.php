<?php
require_once ("animal.php");
class Frog extends Animal
{
	public $lompat="hop hop";
	public function jump(){
		return "$this->lompat";
	}
}
$kodok = new Frog("buduk");
echo $kodok->get_name() . "<br>"; // "buduk"
$kodok->legs = 4;
echo $kodok->legs . "<br>"; // 2
echo $kodok->jump() . "<br>"; // "hop hop"

?>