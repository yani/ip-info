<?php

namespace Yani\IpInfo;

use GuzzleHttp\Client;
use Yani\IpInfo\Exception\NoInfoException;

class IpInfoService {

    private ?Client $client = null;

    private array $drivers = [];

    private array $array_cache = [];

    private array $guzzle_config = [];

    public function __construct(array|null $config = null)
    {
        if($config === null){
            $config = require __DIR__ . '/../config/default.php';
        }

        if(isset($config['guzzle_config'])){
            $this->guzzle_config = $config['guzzle_config'];
        }

        $this->drivers = $config['drivers'];
    }

    public function getInfo(string $ip): IpInfo
    {
        if(isset($this->array_cache[$ip])){
            return $this->array_cache[$ip];
        }

        /** @var DriverInterface $driver */
        foreach($this->drivers as $driver)
        {
            $driver->setGuzzleClient($this->getGuzzleClient());

            $info = $driver->getIpInfo($ip);
            
            if($info){
                return $this->array_cache[$ip] = $info;
            }
        }

        throw new NoInfoException('failed to grab IP info');
    }

    public function setGuzzleClient(Client $client): void
    {
        $this->client = $client;
    }

    public function createGuzzleClient(): Client
    {
        return new Client($this->guzzle_config);
    }

    public function getGuzzleClient(): Client
    {
        if($this->client === null){
            $this->client = $this->createGuzzleClient();
        }

        return $this->client;
    }
}