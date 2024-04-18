<?php


class Address
{
 
  // Inside
 
  /*   public $street_address;
  public $city;
  public $zip_code;
   */
  public static $country = 'Italy';

  public function __construct(public string $street_address, public string $city, public string $zip_code)
  {
   /*  $this->street_address = $street_address;
    $this->city = $city;
    $this->zip_code = $zip_code;
    $this->country = $country; */
  }



  public function getStaticCountry()
  {
    return self::$country;
  }
}


// Outside
