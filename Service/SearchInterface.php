<?php

namespace Stocarul\TwitterBundle\Service;

use Stocarul\TwitterBundle\Http\ClientInterface;

interface SearchInterface
{
    public function __construct(ClientInterface $client);
}
