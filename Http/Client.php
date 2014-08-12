<?php

namespace Stocarul\TwitterBundle\Http;

use GuzzleHttp\Client AS Base;
use GuzzleHttp\Event\SubscriberInterface;
use Stocarul\TwitterBundle\Subscriber\Oauth\Oauth1;

/**
 * Class: Client
 *
 * @see ClientInterface
 * @see Base
 */
class Client extends Base implements ClientInterface
{
    /**
     * oauthSubscriber
     *
     * @var Oauth1
     */
    protected $oauthSubscriber;

    /**
     * Attach a subscriber
     *
     * @param SubscriberInterface $subscriber
     */
    public function addSubscriber(SubscriberInterface $subscriber)
    {
        $this->getEmitter()->attach($subscriber);
    }

    /**
     * Detach a subscriber
     *
     * @param SubscriberInterface $subscriber
     */
    public function removeSubscriber(SubscriberInterface $subscriber)
    {
        $this->getEmitter()->detach($subscriber);
    }

    /**
     * Set the oauth subscriber
     * Remove the previous one
     *
     * @param Oauth1 $oauthSubscriber
     */
    public function setOauthSubscriber(Oauth1 $oauthSubscriber)
    {
        if ($this->oauthSubscriber) {
            $this->removeSubscriber($this->oauthSubscriber);
        }

        $this->addSubscriber($oauthSubscriber);
        $this->oauthSubscriber = $oauthSubscriber;
    }

    /**
     * Return the setted oauth subscriber
     *
     * @return Oauth1
     */
    public function getOauthSubscriber()
    {
        return $this->oauthSubscriber;
    }
}
