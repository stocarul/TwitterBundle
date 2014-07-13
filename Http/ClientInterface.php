<?php

namespace Stocarul\TwitterBundle\Http;

use GuzzleHttp\ClientInterface AS Base;
use GuzzleHttp\Event\SubscriberInterface;

/**
 * Class: ClientInterface
 *
 * @see Base
 */
interface ClientInterface extends Base
{
    /**
     * Attach a subscriber
     *
     * @param SubscriberInterface $subscriber
     */
    public function addSubscriber(SubscriberInterface $subscriber);
}
