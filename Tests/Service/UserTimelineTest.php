<?php

namespace Stocarul\TwitterBundle\Tests\Service;

use GuzzleHttp\Message\Response;
use Stocarul\TwitterBundle\Http\Client;
use Stocarul\TwitterBundle\Factory\TweetFactory;
use Stocarul\TwitterBundle\Service\UserTimeline;
use Stocarul\TwitterBundle\Model\Tweet;

/**
 * Class: UserTimelineTest
 *
 * @see \PHPUnit_Framework_TestCase
 */
class UserTimelineTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var UserTimeline
     */
    protected $userTimeline;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->userTimeline = new UserTimeline(
            $this->getClient(),
            $this->getTweetFactory()
        );
    }

    /**
     * Test getStatuses method.
     */
    public function testGetStatuses()
    {
        $this->assertEquals(
            $this->getResults(),
            $this->userTimeline->getStatuses($this->getQuery())
        );
    }

    /**
     * Get a mock of Client.
     *
     * @return Client
     */
    protected function getClient()
    {
        $client = $this
            ->getMockBuilder('\Stocarul\TwitterBundle\Http\Client')
            ->setMethods(array('get'))
            ->disableOriginalConstructor()
            ->getMock()
        ;

        $client
            ->expects($this->once())
            ->method('get')
            ->with(
                $this->equalTo('statuses/user_timeline.json'),
                $this->equalTo(array('query' => $this->getQuery()))
            )
            ->will($this->returnValue($this->getClientResponse()))
        ;

        return $client;
    }

    /**
     * Get a mock of query.
     *
     * @return array
     */
    protected function getQuery()
    {
        return array('user_id' => '12345');
    }

    /**
     * Get a mock of client response.
     *
     * @return Response
     */
    protected function getClientResponse()
    {
        $response = $this
            ->getMockBuilder('\GuzzleHttp\Message\Response')
            ->setMethods(array('getBody'))
            ->disableOriginalConstructor()
            ->getMock()
        ;

        $response
            ->expects($this->once())
            ->method('getBody')
            ->with()
            ->will($this->returnValue(json_encode($this->getResponseBody())))
        ;

        return $response;
    }

    /**
     * Get a mock of response body.
     *
     * @return array
     */
    protected function getResponseBody()
    {
        return array(
            'coordinates' => null,
            'favorited' => false,
            'created_at' => 'Wed Aug 29 17:12:58 +0000 2012'
        );
    }

    /**
     * Get a mock of TweetFactory.
     *
     * @return TweetFactory
     */
    protected function getTweetFactory()
    {
        $factory = $this
            ->getMockBuilder('\Stocarul\TwitterBundle\Factory\TweetFactory')
            ->setMethods(array('constructArray'))
            ->disableOriginalConstructor()
            ->getMock()
        ;

        $factory
            ->expects($this->once())
            ->method('constructArray')
            ->with($this->equalTo($this->getResponseBody()))
            ->will($this->returnValue($this->getResults()))
        ;

        return $factory;
    }

    /**
     * Get a mock of results.
     *
     * @return Tweet[]
     */
    protected function getResults()
    {
        return array(
            $this->getTweet(),
            $this->getTweet()
        );
    }

    /**
     * Get a mock of Tweet.
     *
     * @return Tweet
     */
    protected function getTweet()
    {
        $tweet = $this
            ->getMockBuilder('\Stocarul\TwitterBundle\Model\Tweet')
            ->disableOriginalConstructor()
            ->getMock()
        ;

        return $tweet;
    }
}
