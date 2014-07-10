<?php

namespace Stocarul\TwitterBundle\Http;

use GuzzleHttp\Client AS Base;
use GuzzleHttp\Event\SubscriberInterface;
use Stocarul\TwitterBundle\Http\ClientInterface;

class Client extends Base implements ClientInterface
{
    public function addSubscriber(SubscriberInterface $subscriber)
    {
        $this->getEmitter()->attach($subscriber);
    }
}
