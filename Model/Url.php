<?php

namespace Stocarul\TwitterBundle\Model;

use JMS\Serializer\Annotation AS JMS;

class Url
{
    /**
     * Version of the URL to display to clients.
     *
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $displayUrl;

    /**
     * Expanded version of display_url.
     *
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $expandedUrl;

    /**
     * An array of integers representing offsets within the Tweet text where
     * the URL begins and ends. The first integer represents the location of
     * the first character of the URL in the Tweet text. The second integer
     * represents the location of the first non-URL character after the end
     * of the URL.
     *
     * @var integer[]
     *
     * @JMS\Type("array<integer>")
     */
    protected $indices;

    /**
     * Wrapped URL, corresponding to the value embedded directly into the
     * raw Tweet text, and the values for the indices parameter.
     *
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $url;

    /**
     * Get displayUrl
     *
     * @return string
     */
    public function getDisplayUrl()
    {
        return $this->displayUrl;
    }

    /**
     * Set displayUrl
     *
     * @param  string $displayUrl
     * @return Url
     */
    public function setDisplayUrl($displayUrl)
    {
        $this->displayUrl = $displayUrl;

        return $this;
    }

    /**
     * Get expandedUrl
     *
     * @return string
     */
    public function getExpandedUrl()
    {
        return $this->expandedUrl;
    }

    /**
     * Set expandedUrl
     *
     * @param  string $expandedUrl
     * @return Url
     */
    public function setExpandedUrl($expandedUrl)
    {
        $this->expandedUrl = $expandedUrl;

        return $this;
    }

    /**
     * Get indices
     *
     * @return integer[]
     */
    public function getIndices()
    {
        return $this->indices;
    }

    /**
     * Set indices
     *
     * @param  integer[] $indices
     * @return Url
     */
    public function setIndices($indices)
    {
        $this->indices = $indices;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set url
     *
     * @param  string $url
     * @return Url
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }
}
