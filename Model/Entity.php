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
     * Represents media elements uploaded with the Tweet.
     *
     * @var \Stocarul\TwitterBundle\Model\Media[]
     *
     * @JMS\Type("array<Stocarul\TwitterBundle\Model\Media>")
     */
    protected $media;

    /**
     * Represents URLs included in the text of a Tweet or within
     * textual fields of a user object.
     *
     * @var \Stocarul\TwitterBundle\Model\Url[]
     *
     * @JMS\Type("array<Stocarul\TwitterBundle\Model\Url>")
     */
    protected $urls;

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

    /**
     * Get media
     *
     * @return \Stocarul\TwitterBundle\Model\Media[]
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Set media
     *
     * @param  \Stocarul\TwitterBundle\Model\Media[] $media
     * @return Entity
     */
    public function setMedia($media)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get urls
     *
     * @return \Stocarul\TwitterBundle\Model\Url[]
     */
    public function getUrls()
    {
        return $this->urls;
    }

    /**
     * Set urls
     *
     * @param  \Stocarul\TwitterBundle\Model\Url[] $urls
     * @return Entity
     */
    public function setUrls($urls)
    {
        $this->urls = $urls;

        return $this;
    }
}
