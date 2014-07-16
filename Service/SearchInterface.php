<?php

namespace Stocarul\TwitterBundle\Service;

/**
 * Class: SearchInterface
 *
 */
interface SearchInterface
{
    /**
     * Returns a collection of relevant Tweets matching a specified query.
     *
     * @param array $params
     *
     * @return \Stocarul\TwitterBundle\Model\Tweet[]
     */
    public function searchTweets($params = array());
}
