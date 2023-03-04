<?php

class DiscogsApi
{
    protected $client;

    public function __construct($config)
    {
        $this->client = new Discogs($config);
    }

    public function search($type, $query)
    {
        return $this->client->get('/database/search', [
            'query' => [
                'type' => $type,
                'q' => $query,
            ],
        ])->getBody();
    }

    public function getRelease($id)
    {
        return $this->client->get('/database/releases/' . $id)->getBody();
    }

    public function getReleaseVersions($id)
    {
        return $this->client->get('/database/releases/' . $id . '/versions')->getBody();
    }

    public function getMaster($id)
    {
        return $this->client->get('/database/masters/' . $id)->getBody();
    }

    public function getMasterVersions($id)
    {
        return $this->client->get('/database/masters/' . $id . '/versions')->getBody();
    }

    public function getArtist($id)
    {
        return $this->client->get('/database/artists/' . $id)->getBody();
    }

    public function getArtistReleases($id)
    {
        return $this->client->get('/database/artists/' . $id . '/releases')->getBody();
    }

    public function getLabel($id)
    {
        return $this->client->get('/database/labels/' . $id)->getBody();
    }

    public function getLabelReleases($id)
    {
        return $this->client->get('/database/labels/' . $id . '/releases')->getBody();
    }

    public function searchMarketplace($type, $query)
    {
        return $this->client->get('/marketplace/search', [
            'query' => [
                'type' => $type,
                'q' => $query,
            ],
        ])->getBody();
    }

    public function getPriceSuggestions($id)
    {
        return $this->client->get('/marketplace/price_suggestions', [
            'query' => [
                'release_id' => $id,
            ],
        ])->getBody();
    }

    public function getListing($id)
    {
        return $this->client->get('/marketplace/listings/' . $id)->getBody();
    }

    public function getListingOrders($id)
    {
        return $this->client->get('/marketplace/listings/' . $id . '/orders')->getBody();
    }

    public function createListingOrder($id, $data)
    {
        return $this->client->post('/marketplace/listings/' . $id . '/order', [
            'json' => $data,
        ])->getBody();
    }

    public function sendOrderMessage($id, $data)
    {
        return $this->client->post('/marketplace/orders/' . $id . '/messages', [
            'json' => $data,
        ])->getBody();
    }

    public function getInventory()
    {
        return $this->client->get('/inventory').getBody();
    }

    public function getInventoryItem($id)
    {
        return $this->client->get('/inventory/' . $id)->getBody();
    }

    public function createInventoryItem($data)
    {
        return $this->client->post('/inventory', [
            'json' => $data,
        ])->getBody();
    }

    public function updateInventoryItem($id, $data)
    {
        return $this->client->post('/inventory/' . $id, [
            'json' => $data,
        ])->getBody();
    }

    public function deleteInventoryItem($id)
    {
        return $this->client->delete('/inventory/' . $id)->getBody();
    }
}

