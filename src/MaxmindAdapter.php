<?php

namespace Hillel\Adapter;

use GeoIp2\Database\Reader;
use GeoIp2\Exception\AddressNotFoundException;

final class MaxmindAdapter implements IpParserInterface
{
    private $reader;
    private $record;

    public function __construct(Reader $reader)
    {
        $this->reader = $reader;
    }

    public function parse(string $ip)
    {
        try {
            $this->record = $this->reader->city($ip);
        } catch (AddressNotFoundException $exception) {}
    }

    public function getCountryName()
    {
        return $this->record->country->name ?? null;
    }

    public function getCountryCode()
    {
        return $this->record->country->isoCode ?? null;
    }

    public function getCityName()
    {
        return $this->record->city->name ?? null;
    }
}
