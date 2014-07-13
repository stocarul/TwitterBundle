<?php

namespace Stocarul\TwitterBundle\Service;

use Stocarul\TwitterBundle\Http\ClientInterface;
use Stocarul\TwitterBundle\Factory\TweetFactory;

/**
 * Class: Search
 *
 * @see SearchInterface
 */
class Search implements SearchInterface
{
    /**
     * Http client
     *
     * @var ClientInterface
     */
    protected $client;

    /**
     * tweetFactory
     *
     * @var TweetFactory
     */
    protected $tweetFactory;

    /**
     * Search constructor
     *
     * @param ClientInterface $client
     * @param TweetFactory    $tweetFactory
     */
    public function __construct(ClientInterface $client, TweetFactory $tweetFactory)
    {
        $this->client = $client;
        $this->tweetFactory = $tweetFactory;
    }

    /**
     * Returns a collection of relevant Tweets matching a specified query.
     *
     * @param  array   $params
     * @return Tweet[]
     */
    public function searchTweets($params = array())
    {
        $response = $this->client->get(
            'search/tweets.json',
            array(
                'query' => $params,
            )
        );

        $response = json_decode($response->getBody());

        return $this->tweetFactory->constructArray($response->statuses);
    }
}
