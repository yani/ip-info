<?php

namespace Xenokore\IpInfo;

class IpInfo {

    public function __construct(
        public readonly String $ip,
        public readonly String $country_code,
        public readonly ?String $network = null,
        public readonly ?String $version = null,
        public readonly ?String $city = null,
        public readonly ?String $region = null,
        public readonly ?String $region_code = null,
        public readonly ?String $country = null,
        public readonly ?String $country_name = null,
        public readonly ?String $country_code_iso3 = null,
        public readonly ?String $country_capital = null,
        public readonly ?String $country_tld = null,
        public readonly ?String $continent_code = null,
        public readonly ?String $postal = null,
        public readonly ?String $latitude = null,
        public readonly ?String $longitude = null,
        public readonly ?String $timezone = null,
        public readonly ?String $utc_offset = null,
        public readonly ?String $country_calling_code = null,
        public readonly ?String $currency = null,
        public readonly ?String $currency_name = null,
        public readonly ?String $languages = null,
        public readonly ?String $country_area = null,
        public readonly ?String $asn = null,
        public readonly ?String $org = null,
        public readonly ?bool $in_eu = null,
    ){}
}