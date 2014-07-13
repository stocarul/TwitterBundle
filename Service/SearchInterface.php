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
     * @param TweetFactory    $tweetFactory
     */
    public function __construct(ClientInterface $client, TweetFactory $tweetFactory);

    /**
     * Returns a collection of relevant Tweets matching a specified query.
     *
     * @param array $params
     *
     * @return Tweet[]
     */
    public function searchTweets($params = array());
}
