<?php
// physical address
class Address{}
  public $street_address_1; 
  public $street_address_2; 

  // Name of city
  public $city_name;

  // Name of subdivision
  public $subdivision_name;
  // Postal code
  public $country_name;
  // Name of country

  // Display an address in HTML
  function display(){
  	$output = "";

  	// street address
  	$output .= $this->street_address_1;
  	if ($this -> street_address_2) {
  		# code...
  		$output .= '<br/>' .$this->street_address_2;
  	}
  	return $output;
  }
?>