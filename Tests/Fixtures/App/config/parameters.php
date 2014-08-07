<?php

if (getenv('OAUTH_CONSUMER_KEY')) {
    $container->setParameter('oauth_consumer_key', getenv('OAUTH_CONSUMER_KEY'));
}

if (getenv('OAUTH_CONSUMER_SECRET')) {
    $container->setParameter('oauth_consumer_secret', getenv('OAUTH_CONSUMER_SECRET'));
}
