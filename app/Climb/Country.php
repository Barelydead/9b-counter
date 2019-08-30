<?php

namespace App\Climb;

/**
 * undocumented class
 */
class Country
{

  /** @var Array $coutries  */
  protected $countries;

  /**
   * Constructor.
   *
   **/
  public function __construct()
  {
    $this->countries = config('country.all');
  }

  /**
   * Return all countries.
   *
   **/
  public function getCountries()
  {
    return $this->countries;
  }

  /**
   * Checks if a country exists.
   *
   **/
  public function exists($country)
  {
    return in_array($country, $this->countries);
  }

  /**
   * Return path to the flag or null if not exists.
   *
   **/
  public function getFlag($country)
  {
    if (!$this->exists($country)) {
      return null;
    }

    $country = str_replace(' ', '-', $country);

    return asset("images/flags/$country.svg");
  }
}
