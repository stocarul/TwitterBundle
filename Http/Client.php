<?php

namespace Stocarul\TwitterBundle\Http;

use GuzzleHttp\Client AS Base;
use GuzzleHttp\Event\SubscriberInterface;

/**
 * Class: Client
 *
 * @see ClientInterface
 * @see Base
 */
class Client extends Base implements ClientInterface
{
    /**
     * Attach a subscriber
     *
     * @param SubscriberInterface $subscriber
     */
    public function addSubscriber(SubscriberInterface $subscriber)
    {
        $this->getEmitter()->attach($subscriber);
    }
}
