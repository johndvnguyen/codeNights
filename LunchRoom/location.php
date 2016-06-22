<?php
class location{
	private $neighbors;
	private $distanceToKeg;
	
	//set an array of neighbors
	private function setNeighbors($neighbors) {
		$this->neighbors=$neighbors;
	}
	
	//return an array of neighbors
	private function getNeighbors() {
		return $neighbors;
	}
	
	//set the distance to Keg
	private function setDistanceToKeg($distanceToKeg) {
		$this->distanceToKeg=$distanceToKeg;
	}
	
	//return the distance to Keg
	private function getDistanceToKeg() {
		return $distanceToKeg;
	}

}
?>