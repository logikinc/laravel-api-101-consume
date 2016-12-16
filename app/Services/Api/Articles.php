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

    public function create(array $data)
    {
        $this->guzzle->request('POST', $this->endpoint, [
            'form_params' => $data,
            'headers' => [
                'Authorization' => 'Bearer ' . config('services.api.token'),
            ],
        ]);

        return true;
    }

    public function update($id, array $data)
    {
        $this->guzzle->request('PUT', $this->endpoint . "/{$id}", [
            'form_params' => $data,
            'headers' => [
                'Authorization' => 'Bearer ' . config('services.api.token'),
            ],
        ]);

        return true;
    }

    public function delete($id)
    {
        $this->guzzle->request('DELETE', $this->endpoint . "/{$id}", [
            'headers' => [
                'Authorization' => 'Bearer ' . config('services.api.token'),
            ],
        ]);

        return true;
    }
}
