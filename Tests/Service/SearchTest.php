<?php

namespace Stocarul\TwitterBundle\Tests\Service;

use Stocarul\TwitterBundle\Service\Search;

/**
 * Class: SearchTest
 *
 * @see \PHPUnit_Framework_TestCase
 */
class SearchTest extends \PHPUnit_Framework_TestCase
{
    /**
     * testSearch
     *
     */
    public function testSearch()
    {
        $client = $this->getClient();
        $tweetFactory = $this->getTweetFactory();

        $searchService = new Search($client, $tweetFactory);

        $tweets = $searchService->searchTweets($this->getQuery());
        $this->assertEquals($this->getResults(), $tweets);
    }

    /**
     * getTweetFactory
     *
     * @return \Stocarul\TwitterBundle\Factory\TweetFactory
     */
    public function getTweetFactory()
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
            ->with($this->equalTo($this->getStatuses()))
            ->will($this->returnValue($this->getResults()))
        ;

        return $factory;
    }

    /**
     * getClient
     *
     * @return \Stocarul\TwitterBundle\Http\Client
     */
    public function getClient()
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
                $this->equalTo('search/tweets.json'),
                $this->equalTo(array(
                    'query' => $this->getQuery(),
                ))
            )
            ->will($this->returnValue($this->getClientResponse()))
        ;

        return $client;
    }

    /**
     * getClientResponse
     *
     * @return \GuzzleHttp\Message\Response
     */
    public function getClientResponse()
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
            ->will($this->returnValue($this->getResponseJson()))
        ;

        return $response;
    }

    /**
     * The query sent to the searchTweets method
     *
     * @erturn array
     */
    public function getQuery()
    {
        return array(
            'q' => '#hashtag',
        );
    }

    /**
     * The expected response form the server
     *
     * @return string
     */
    public function getResponseJson()
    {
        $response = array(
            'statuses' => $this->getStatuses(),
        );

        return json_encode($response);
    }

    /**
     * getStatuses
     *
     * @return string[]
     */
    public function getStatuses()
    {
        return array(
            'a',
            'b',
        );
    }

    /**
     * getResults
     *
     * @return string[]
     */
    public function getResults()
    {
        return array(
            'x',
            'y',
        );
    }
}
