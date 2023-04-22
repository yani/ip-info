IP Info Library
===============

A standalone PHP library that works with multiple services.

Based on `stevebauman/location` but simplified.



## Features

- Get geographical information about an IP address
- Fallback services



## Services

- **ipapi.co** (no configuration needed)
- _more to come_



## Install

```
composer require yani/ip-info
```



## Usage

```php
require __DIR__ . '/vendor/autoload.php';

$service = new Yani\IpInfo\IpInfoService();

$ip = $service->getInfo('8.8.8.8');

var_dump($ip);
```

Output:

``` 
class Yani\IpInfo\IpInfo#33 (26) {
  public readonly string $ip =>
  string(7) "8.8.8.8"
  public readonly string $country_code =>
  string(2) "US"
  public readonly ?string $network =>
  string(10) "8.8.8.0/24"
  public readonly ?string $version =>
  string(4) "IPv4"
  public readonly ?string $city =>
  string(13) "Mountain View"
  public readonly ?string $region =>
  string(10) "California"
  public readonly ?string $region_code =>
  string(2) "CA"
  public readonly ?string $country =>
  string(2) "US"
  public readonly ?string $country_name =>
  string(13) "United States"
  public readonly ?string $country_code_iso3 =>
  string(3) "USA"
  public readonly ?string $country_capital =>
  string(10) "Washington"
  public readonly ?string $country_tld =>
  string(3) ".us"
  public readonly ?string $continent_code =>
  string(2) "NA"
  public readonly ?string $postal =>
  string(5) "94043"
  public readonly ?string $latitude =>
  string(8) "37.42301"
  public readonly ?string $longitude =>
  string(11) "-122.083352"
  public readonly ?string $timezone =>
  string(19) "America/Los_Angeles"
  public readonly ?string $utc_offset =>
  string(5) "-0700"
  public readonly ?string $country_calling_code =>
  string(2) "+1"
  public readonly ?string $currency =>
  string(3) "USD"
  public readonly ?string $currency_name =>
  string(6) "Dollar"
  public readonly ?string $languages =>
  string(18) "en-US,es-US,haw,fr"
  public readonly ?string $country_area =>
  string(7) "9629091"
  public readonly ?string $asn =>
  string(7) "AS15169"
  public readonly ?string $org =>
  string(6) "GOOGLE"
  public readonly ?bool $in_eu =>
  bool(false)
}
```



## License

MIT
