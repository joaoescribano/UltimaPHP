<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class blacksolenworker extends Mobile {
	public function summon() {
		$this->name = "a black solen worker";
		$this->body = 805;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0;
		$this->str = rand(96, 120);
		$this->dex = rand(81, 105);
		$this->int = rand(36, 60);
		$this->hits = 0;
		$this->maxhits = 0;
		$this->damage_min = 5;
		$this->damage_max = 7;
		$this->resist_physical = rand(25, 30);
		$this->resist_fire = rand(20, 30);
		$this->resist_cold = rand(10, 20);
		$this->resist_poison = rand(10, 20);
		$this->resist_energy = rand(20, 30);
		$this->karma = -1500;
		$this->fame = 1500;
		$this->virtualarmor = 28;

}}
?>