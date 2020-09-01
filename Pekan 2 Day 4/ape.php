<?php
require_once ("animal.php");
class Ape extends Animal
{
	public $suara="Auooo";
	public function yell(){
		return "$this->suara";
	}
}
$sungokong = new Ape("kera sakti");
echo $sungokong->get_name() . "<br>"; // "kera sakti"
echo $sungokong->yell(); // "Auooo"

?>