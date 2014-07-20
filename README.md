TwitterBundle
=============

## Installation

#### A) Add StocarulTwitterBundle to your composer.json

```yaml
{
    "require": {
        "stocarul/twitter-bundle": "dev-master"
    }
}
```

#### B) Enable the bundle

```php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new JMS\SerializerBundle\JMSSerializerBundle(),
        new Stocarul\TwitterBundle\StocarulTwitterBundle(),
    );
}
```

#### C) Configure the bundle

```yaml
// app/config/config.yml

stocarul_twitter:
    oauth:
        # Application key (mandatory)
        consumer_key: your_twitter_consumer_key
        consumer_secret: your_twitter_consumer_secret

        # Access token (optional)
        # Can be used to make API requests on your own account's behalf
        token: your_twitter_token_key
        token_secret: your_twitter_token_secret
```

## Contributing

#### A) Fork and clone the repository

#### B) Instal dependencies

```bash
composer install
```

#### C) Tests configuration

Create a test app on Twitter Developers, then create `Tests/Fixtures/App/config/parameters.yml` from `Tests/Fixtures/App/config/parameters.yml.dist` and edit it to add your credentials. To check if everything works just execute the phpunit command in the root directory.
