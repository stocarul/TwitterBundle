<?php

namespace Stocarul\TwitterBundle\Service;

use Stocarul\TwitterBundle\Http\ClientInterface;
use Stocarul\TwitterBundle\Factory\TweetFactory;

/**
 * Class: UserTimeline
 *
 * @see UserTimelineInterface
 */
class UserTimeline implements UserTimelineInterface
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var TweetFactory
     */
    protected $tweetFactory;

    /**
     * Constructor
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
     * {@inheritdoc}
     */
    public function getStatuses($params = array())
    {
        $response = $this->client->get('statuses/user_timeline.json', array(
            'query' => $params
        ));

        $response = json_decode($response->getBody(), true);

        return $this->tweetFactory->constructArray($response);
    }
}
