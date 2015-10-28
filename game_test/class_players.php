<?php 
	class Players {
		private $id;
		private $first;
		private $last;
		private $Gamer_Tag;
		private $Score;
		private $email;

		public function getId() {return $this->id;}
		public function getFirst() {return $this->first;}
		public function getLast() {return $this->last;}
		public function getGamerTag() {return $this->Gamer_Tag;}
		public function getScore() {return $this->Score;}
		public function getEmail() {return $this->email;}

		public function setId($newID) {$this->id=$newID;}
		public function setFirst($firstName) {$this->first=$firstName;}
		// public function getLast() {return $this->last;}
		// public function getGamerTag() {return $this->Gamer_Tag;}
		// public function getScore() {return $this->Score;}
		// public function getEmail() {return $this->email;}
	}
?>