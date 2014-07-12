<?php

namespace Stocarul\TwitterBundle\Service;

use Stocarul\TwitterBundle\Http\ClientInterface;
use Stocarul\TwitterBundle\Factory\TweetFactory;

/**
 * Class: SearchInterface
 *
 */
interface SearchInterface
{
    /**
     * Search constructor
     *
     * @param ClientInterface $client
     */
    public function __construct(ClientInterface $client);

    /**
     * Get tweetFactory
     *
     * @return TweetFactory
     */
    public function getTweetFactory();

    /**
     * Set tweetFactory
     *
     * @param  TweetFactory    $tweetFactory
     * @return SearchInterface
     */
    public function setTweetFactory(TweetFactory $tweetFactory);

    /**
     * Returns a collection of relevant Tweets matching a specified query.
     *
     * @param array $params
     *
     * @return Tweet[]
     */
    public function searchTweets($params = array());
}
