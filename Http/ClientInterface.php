<?php

namespace Stocarul\TwitterBundle\Http;

use GuzzleHttp\ClientInterface AS Base;
use GuzzleHttp\Event\SubscriberInterface;

interface ClientInterface extends Base
{
    public function addSubscriber(SubscriberInterface $subscriber);
}
