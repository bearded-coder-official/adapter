<?php

namespace Hillel\Adapter;

interface IpParserInterface
{
    public function parse(string $ip);

    public function getCountryName();
    public function getCountryCode();
    public function getCityName();
}
