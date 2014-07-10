<?php

namespace Stocarul\TwitterBundle\Service;

use Stocarul\TwitterBundle\Service\SearchInterface;
use Stocarul\TwitterBundle\Http\ClientInterface;

class Search implements SearchInterface
{
    protected $client;

    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    public function searchTweets($params = array())
    {
        return $this->client->get(
            'search/tweets.json',
            array(
                'query' => $params,
            )
        );
    }
}
