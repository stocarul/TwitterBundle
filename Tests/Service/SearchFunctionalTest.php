<?php

namespace Stocarul\TwitterBundle\Tests\Service;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class: SearchFunctionalTest
 *
 * @see WebTestCase
 */
class SearchFunctionalTest extends WebTestCase
{
    /**
     * searchService
     *
     * @var \Stocarul\TwitterBundle\Service\Search
     */
    protected $searchService;

    /**
     * setUp
     */
    public function setUp()
    {
        $kernel = $this->createKernel();
        $kernel->boot();

        $this->searchService = $kernel
            ->getContainer()
            ->get('stocarul_twitter.search');
    }

    /**
     * testSearchTweets
     */
    public function testSearchTweets()
    {
        $tweets = $this
            ->searchService
            ->searchTweets(array(
                'q' => '#worldcup',
            ));

        $this->assertGreaterThan(0, count($tweets));

        foreach ($tweets as $t) {
            $this->assertEquals(
                'Stocarul\TwitterBundle\Model\Tweet',
                get_class($t)
            );
        }
    }
}
