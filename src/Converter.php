<?php
namespace ChibiFR\CountryConverter;

/**
 * Convert an ISO country code to a country name and vice-versa.
 *
 * Class Converter
 * @package ChibiFR\CountryConverter
 */
class Converter
{
    /**
     * @var array The country names and codes as an associative array
     */
    protected $countries;

    public function __construct()
    {
        $this->countries = Countries::getCountries();
    }

    /**
     * Find a country name from the country code specified, throw an exception if the country could not
     * be found.
     *
     * @param string $countryCode The country code for the required country name.
     * @return string The name of the country for the $countryCode parameter.
     * @throws InvalidCountryCodeException
     */
    public function getCountryName($countryCode)
    {
        $countryCode = strtoupper($countryCode);
        if (array_key_exists($countryCode, $this->countries)) {
            return $this->countries[$countryCode];
        } else {
            throw new InvalidCountryCodeException("No country found corresponding to the code $countryCode");
        }
    }

    /**
     * Find a country code from the country name specified, throw an exception if the country could not
     * be found.
     *
     * @param string $countryName The country name for the required country code.
     * @return string The code of the country for the $countryName parameter.
     * @throws InvalidCountryNameException
     */
    public function getCountryCode($countryName)
    {
        $countryName = ucwords($countryName);
        if (in_array($countryName, $this->countries)) {
            return array_search($countryName, $this->countries);
        } else {
            throw new InvalidCountryNameException("No ISO key found for the country $countryName");
        }
    }
}

