<?php

namespace Stocarul\TwitterBundle\Tests\Service;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Stocarul\TwitterBundle\Service\UserTimeline;

/**
 * Class: UserTimelineFunctionalTest
 *
 * @see WebTestCase
 */
class UserTimelineFunctionalTest extends WebTestCase
{
    /**
     * @var UserTimeline
     */
    protected $UserTimeline;

    /**
     * Set up tests.
     */
    public function setUp()
    {
        $kernel = $this->createKernel();
        $kernel->boot();

        $this->userTimeline = $kernel->getContainer()->get(
            'stocarul_twitter.user_timeline'
        );
    }

    /**
     * Test getStatuses method.
     */
    public function testGetStatuses()
    {
        $tweets = $this->userTimeline->getStatuses(array(
            'screen_name' => 'twitterapi'
        ));

        $this->assertGreaterThan(0, count($tweets));

        foreach ($tweets as $t) {
            $this->assertInstanceOf('Stocarul\TwitterBundle\Model\Tweet', $t);
        }
    }
}
