<?php

namespace App\Services\Api;

use GuzzleHttp\Client as Guzzle;

class Articles
{
    protected $guzzle;

    protected $endpoint;

    public function __construct(Guzzle $guzzle)
    {
        $this->guzzle = $guzzle;
        $this->endpoint = config('services.api.endpoint') . '/articles';
    }

    public function all()
    {
        $response = $this->guzzle->request('GET', $this->endpoint);

        $body = json_decode($response->getBody());

         return collect($body->data);
    }

    public function get($id)
    {
        $response = $this->guzzle->request('GET', $this->endpoint . "/{$id}");

        $body = json_decode($response->getBody());

         return $body->data;
    }
}
