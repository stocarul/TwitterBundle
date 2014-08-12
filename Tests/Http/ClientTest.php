<?php

namespace Stocarul\TwitterBundle\Tests\Http;

use Stocarul\TwitterBundle\Http\Client;
use GuzzleHttp\Subscriber\Mock;
use GuzzleHttp\Message\Response;

/**
 * Class: ClientTest
 *
 * @see \PHPUnit_Framework_TestCase
 */
class ClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * testAddSubscriber
     *
     */
    public function testAddSubscriber()
    {
        $client = new Client();
        $response = new Response(200);

        $subscriber = new Mock(array($response));
        $client->addSubscriber($subscriber);

        $this->assertEquals($response, $client->get());
    }

    /**
     * testRemoveSubscriber
     *
     * @expectedException \GuzzleHttp\Exception\RequestException
     */
    public function testRemoveSubscriber()
    {
        $client = new Client();
        $response = new Response(200);

        $subscriber = new Mock(array($response));
        $client->addSubscriber($subscriber);
        $client->removeSubscriber($subscriber);

        $this->assertEquals($response, $client->get());
    }

    /**
     * testSetOauthSubscriber
     *
     */
    public function testSetOauthSubscriber()
    {
        $client = new Client();
        $oauth = $this->getOauthSubscriber();

        $client->setOauthSubscriber($oauth);

        $this->assertEquals($oauth, $client->getOauthSubscriber());
    }

    /**
     * getOauthSubscriber
     *
     * @return \GuzzleHttp\Subscriber\Oauth\Oauth1
     */
    protected function getOauthSubscriber()
    {
        $oauth = $this
            ->getMockBuilder('\Stocarul\TwitterBundle\Subscriber\Oauth\Oauth1')
            ->setMethods(array('getEvents'))
            ->disableOriginalConstructor()
            ->getMock();

        $oauth
            ->expects($this->once())
            ->method('getEvents')
            ->will($this->returnValue(array()));

        return $oauth;
    }
}
