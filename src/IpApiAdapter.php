<?php

namespace Hillel\Adapter;

final class IpApiAdapter implements IpParserInterface
{
    private $response;

    public function parse(string $ip)
    {
        $this->response = \Illuminate\Support\Facades\Http::get('http://ip-api.com/json/' . $ip);
    }

    public function getCountryName()
    {
        return $this->response->json('country') ?? null;
    }

    public function getCountryCode()
    {
        return $this->response->json('countryCode') ?? null;
    }

    public function getCityName()
    {
        return $this->response->json('city') ?? null;
    }
}
