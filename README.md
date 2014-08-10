TwitterBundle
=============

[![Build Status](https://api.shippable.com/projects/53e31b13b405175800821401/badge/master)](https://www.shippable.com/projects/53e31b13b405175800821401/builds/16)

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
```

## Contributing

#### A) Fork and clone the repository

#### B) Instal dependencies

```bash
composer install
```

#### C) Tests configuration

Create a test app on Twitter Developers, then create `Tests/Fixtures/App/config/parameters.yml` from `Tests/Fixtures/App/config/parameters.yml.dist` and edit it to add your credentials. To check if everything works just execute the phpunit command in the root directory.
