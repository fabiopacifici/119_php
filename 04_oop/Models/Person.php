<?php


/**
 * ## Class Person
 * Describes a person object
 * 
 */
class Person
{

  /**
   * @var $name the person name
   * @var $lastname the person last name
   */
  public $name;
  public $lastname;
  public $age;
  public $address;
  public $species = 'Human';


  public function __construct($name, $lastname, $age, Address $address) {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->address = $address;
  }


  // getters 
  public function getName() {
    
    return $this->name;

  }

  function getFullAddress()
  {
    $street_address = $this->address->street_address;
    $city = $this->address->city;
    $zip_code = $this->address->zip_code;
    $country = $this->address->country;
    return "Address: $street_address $city $zip_code $country";

  }

  // setters
  public function setName($name)
  {

    $this->name = $name;
  }



  // other methods

  public function walk(){
    echo $this->name . ': I am wolking 🚶‍♀️';
  }



  public static function talk(){
    echo 'Humans can talk';
  }


}
