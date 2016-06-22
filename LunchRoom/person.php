<?php
class person{
	private $name;
	private $awesomenessRating;
	private $isFriend;
	
	
	function __construct(){
		$this->name = 'none';
		$this->awesomenessRating = 0;
		$this->isFriend = false;
	}
	
	/*
	Set the value of name
	Arguments: String $name
	Return: none
	*/
	function setName($name) {
		
		$this->name=$name;
	}
	
	/*
	Get the value of name
	Arguments: none
	Return: value of $name
	*/
	function getName() {
		
		return $name;
		
	}
	
	/*
	Set the value of awesomenessRating
	Arguments: int $awesomenessRating
	Return: none
	*/
	function setAwesomenessRating($awesomenessRating) {
		$this->awesomenessRating=$awesomenessRating;
		
	}
	
	/*
	Get the value of $awesomenessRating
	Arguments: none
	Return: value of $awesomenessRating
	*/
	function getAwesomenessRating() {
		return $awesomenessRating;
		
	}
	
	/*
	Set the value of $isfriend
	Arguments: int $isfriend
	Return: value of $isfriend
	*/
	function setIsFriend($isfriend) {
		$this->isFriend=$isfriend;
		
	}
	
	/*
	Set the value of $isfriend
	Arguments: none
	Return: value of $isfriend
	*/                                         
	function getIsFriend() {
		return $isfriend;
	}
	
}
?> 
  