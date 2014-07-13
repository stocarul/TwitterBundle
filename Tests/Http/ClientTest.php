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
}
