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
}
