<?php

namespace Stocarul\TwitterBundle\Tests\Service;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Stocarul\TwitterBundle\Service\Search;

class SearchTest extends WebTestCase
{
    protected function getContainer()
    {
        $kernel = $this->createKernel();
        $kernel->boot();

        return $kernel->getContainer();
    }

    public function testSearch()
    {
        $obj = $this->getContainer()->get('stocarul_twitter.search');

        $response = $obj->searchTweets(array(
            'q' => '#worldcup',
        ));

        $body = $response->getBody();
        var_dump(json_decode($body));
    }
}
