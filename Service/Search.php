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
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * Get tweetFactory
     *
     * @return TweetFactory
     */
    public function getTweetFactory()
    {
        return $this->tweetFactory;
    }

    /**
     * Set tweetFactory
     *
     * @param  TweetFactory $tweetFactory
     * @return Search
     */
    public function setTweetFactory(TweetFactory $tweetFactory)
    {
        $this->tweetFactory = $tweetFactory;

        return $this;
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

        return $this->getTweetFactory()->constructArray($response->statuses);
    }
}
