<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class PlagueBeastLord extends Mobile {
	public function summon() {
		$this->name = "a plague beast lord";
		$this->body = 775;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0;
		$this->str = 0;
		$this->dex = 0;
		$this->int = 0;
		$this->maxhits = 0;
		$this->hits = $this->maxhits;
		$this->damage = 20;
		$this->damageMax = 25;
		$this->resist_physical = rand(45, 55);
		$this->resist_fire = rand(40, 50);
		$this->resist_cold = rand(25, 35);
		$this->resist_poison = rand(75, 85);
		$this->resist_energy = rand(25, 35);
		$this->karma = -2000;
		$this->fame = 2000;
		$this->virtualarmor = 50;

}}
?>
