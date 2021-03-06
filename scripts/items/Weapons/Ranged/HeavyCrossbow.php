<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class HeavyCrossbow extends TypeNormal {
	public function build() {
		$this->name = "heavy crossbow";
		$this->graphic = 0x13FD;
		$this->type = "";
		$this->flags = 0x00;
		$this->value = 0;
		$this->amount = 1;
		$this->color = 0;
		$this->aosstrengthreq = 80;
		$this->aosmindamage = 0;
		$this->aosmaxdamage = 0;
		$this->aosspeed = 22;
		$this->mlspeed = 5;
		$this->oldstrengthreq = 40;
		$this->oldmindamage = 11;
		$this->oldspeed = 10;
		$this->defhitsound = 0;
		$this->defmisssound = 0;
		$this->hits = 31;
		$this->maxHits = 100;
		$this->weight = 9.0;

}}
?>
