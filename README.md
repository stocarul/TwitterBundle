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

#### c) Configure the bundle

```yaml
// app/config/config.yml

stocarul_twitter:
    oauth:
        # Application key (mandatory)
        consumer_key: your_twitter_consumer_key
        consumer_secret: your_twitter_consumer_secret
        
        # Access token (optional)
        # Can be used to make API requests on your own account's behalf
        token: your_twitter_consumer_key
        token_secret: your_twitter_consumer_secret
```
