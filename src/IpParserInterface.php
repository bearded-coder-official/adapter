<?php

namespace Hillel\Adapter;

interface IpParserInterface
{
    public function parse(string $ip);

    public function getCountryName(): string;
    public function getCountryCode(): string;
    public function getCityName(): string;
}
