<?php

if (isset($_ENV['OAUTH_CONSUMER_KEY'])) {
    $container->setParameter('oauth_consumer_key', $_ENV['OAUTH_CONSUMER_KEY']);
}

if (isset($_ENV['OAUTH_CONSUMER_SECRET'])) {
    $container->setParameter('oauth_consumer_secret', $_ENV['OAUTH_CONSUMER_SECRET']);
}
