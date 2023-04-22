<?php

namespace Yani\IpInfo;

interface DriverInterface  {

    public function setGuzzleClient(\GuzzleHttp\Client $client): void;

    public function getIpInfo(string $ip): IpInfo;
}