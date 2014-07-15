<?php

namespace Stocarul\TwitterBundle\Model;

use JMS\Serializer\Annotation AS JMS;

class Entity
{
    /**
     * Represents hashtags which have been parsed out of the Tweet text.
     *
     * @var \Stocarul\TwitterBundle\Model\Hashtag[]
     *
     * @JMS\Type("array<Stocarul\TwitterBundle\Model\Hashtag>")
     */
    protected $hashtags;

    /**
     * Get hashtags
     *
     * @return \Stocarul\TwitterBundle\Model\Hashtag[]
     */
    public function getHashtags()
    {
        return $this->hashtags;
    }

    /**
     * Set hashtags
     *
     * @param  \Stocarul\TwitterBundle\Model\Hashtag[] $hashtags
     * @return Entity
     */
    public function setHashtags($hashtags)
    {
        $this->hashtags = $hashtags;

        return $this;
    }
}
