<?php

namespace Xenokore\IpInfo\Drivers;

use GuzzleHttp\Client;

use Xenokore\IpInfo\Driver;
use Xenokore\IpInfo\DriverInterface;
use Xenokore\IpInfo\IpInfo;

class IpApiDriver implements DriverInterface  {

    private Client $client;

    public function setGuzzleClient(Client $client): void
    {
        $this->client = $client;
    }

    public function getIpInfo(string $ip): IpInfo
    {
        $response = $this->client->request('GET',
            \sprintf("https://ipapi.co/%s/json/", $ip)
        );

        $json = \json_decode((string) $response->getBody());

        return new IpInfo(
            ip                  : $json->ip,
            network             : $json->network,
            version             : $json->version,
            city                : $json->city,
            region              : $json->region,
            region_code         : $json->region_code,
            country             : $json->country,
            country_name        : $json->country_name,
            country_code        : $json->country_code,
            country_code_iso3   : $json->country_code_iso3,
            country_capital     : $json->country_capital,
            country_tld         : $json->country_tld,
            continent_code      : $json->continent_code,
            in_eu               : $json->in_eu,
            postal              : $json->postal,
            latitude            : $json->latitude,
            longitude           : $json->longitude,
            timezone            : $json->timezone,
            utc_offset          : $json->utc_offset,
            country_calling_code: $json->country_calling_code,
            currency            : $json->currency,
            currency_name       : $json->currency_name,
            languages           : $json->languages,
            country_area        : $json->country_area,
            asn                 : $json->asn,
            org                 : $json->org,
        );
    }

}