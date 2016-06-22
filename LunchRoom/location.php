<?php
	
	
class location{
	private $neighbors;
	private $distanceToKeg;
	
	function __construct(){
		$this->neighbors = new array[];
		$this->distanceToKeg = 0;
	}
	/*
	Set the value of neighbors
	Arguments: array $neighbors
	Return: none
	*/
	function setNeighbors($neighbors) {
		$this->neighbors=$neighbors;
	}
	/*
	Get the value of neighbors
	Arguments: none
	Return: value of $neighbors
	*/
	 function getNeighbors() {
		return $neighbors;
	}
	
	/*
	Set the value of distanceToKeg
	Arguments: int $distanceToKeg
	Return: none
	*/ 
	function setDistanceToKeg($distanceToKeg) {
		$this->distanceToKeg=$distanceToKeg;
	}
	
	/*
	Get the value of $distanceToKeg
	Arguments: none
	Return: value of $distanceToKeg
	*/
	
	 function getDistanceToKeg() {
		return $distanceToKeg;
	}

}
?>