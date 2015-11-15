<?php
require '../vendor/autoload.php';

use ChibiFR\CountryConverter\Converter;

class CountryConverterTest extends PHPUnit_Framework_TestCase
{
    public function testFindCountryNameFromIso()
    {
        $converter = new Converter();
        $this->assertEquals('France', $converter->getCountryName('FR'));
    }

    public function testFindCountryIsoFromName()
    {
        $converter = new Converter();
        $this->assertEquals('JP', $converter->getCountryCode('Japan'));
    }

    public function testIsCaseInsensitive()
    {
        $converter = new Converter();
        $this->assertEquals('Greece', $converter->getCountryName('gr'));
    }

    /**
     * @expectedException ChibiFR\CountryConverter\InvalidCountryCodeException
     */
    public function testThrowAnInvalidCountryCodeException()
    {
        $converter = new Converter();
        $converter->getCountryName('zg');
    }

    /**
     * @expectedException ChibiFR\CountryConverter\InvalidCountryNameException
     */
    public function testThrowAnInvalidCountryNameException()
    {
        $converter = new Converter();
        $converter->getCountryCode('Hello World');
    }
}

