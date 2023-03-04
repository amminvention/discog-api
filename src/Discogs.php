<?php

use GuzzleHttp\Client;

class Discogs extends Client
{
    protected $baseUrl = 'https://api.discogs.com';

    public function __construct($config)
    {
        parent::__construct([
            'base_uri' => $this->baseUrl,
            'headers' => [
                'User-Agent' => $config['user_agent'],
                'Authorization' => 'Discogs token=' . $config['token'],
            ],
        ]);
    }
}
