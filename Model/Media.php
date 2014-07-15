<?php

namespace Stocarul\TwitterBundle\Model;

use JMS\Serializer\Annotation AS JMS;

/**
 * Class: Media
 *
 */
class Media
{
    /**
     * URL of the media to display to clients.
     *
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $displayUrl;

    /**
     * An expanded version of display_url. Links to the media display page.
     *
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $expandedUrl;

    /**
     * ID of the media expressed as a 64-bit integer.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     */
    protected $id;

    /**
     * ID of the media expressed as a string.
     *
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $idStr;

    /**
     * An array of integers indicating the offsets within the Tweet text
     * where the URL begins and ends. The first integer represents the
     * location of the first character of the URL in the Tweet text.
     * The second integer represents the location of the first non-URL
     * character occurring after the URL (or the end of the string if the
     * URL is the last part of the Tweet text).
     *
     * @var integer[]
     *
     * @JMS\Type("array<integer>")
     */
    protected $indices;

    /**
     * An http:// URL pointing directly to the uploaded media file.
     *
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $mediaUrl;

    /**
     * An https:// URL pointing directly to the uploaded media file,
     * for embedding on https pages.
     *
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $mediaUrlHttps;

    /**
     * Type of uploaded media.
     *
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $type;

    /**
     * Wrapped URL for the media link. This corresponds with the URL embedded
     * directly into the raw Tweet text, and the values for the indices
     * parameter.
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
     * @return Media
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
     * @return Media
     */
    public function setExpandedUrl($expandedUrl)
    {
        $this->expandedUrl = $expandedUrl;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id
     *
     * @param  integer $id
     * @return Media
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get idStr
     *
     * @return string
     */
    public function getIdStr()
    {
        return $this->idStr;
    }

    /**
     * Set idStr
     *
     * @param  string $idStr
     * @return Media
     */
    public function setIdStr($idStr)
    {
        $this->idStr = $idStr;

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
     * @return Media
     */
    public function setIndices($indices)
    {
        $this->indices = $indices;

        return $this;
    }

    /**
     * Get mediaUrl
     *
     * @return string
     */
    public function getMediaUrl()
    {
        return $this->mediaUrl;
    }

    /**
     * Set mediaUrl
     *
     * @param  string $mediaUrl
     * @return Media
     */
    public function setMediaUrl($mediaUrl)
    {
        $this->mediaUrl = $mediaUrl;

        return $this;
    }

    /**
     * Get mediaUrlHttps
     *
     * @return string
     */
    public function getMediaUrlHttps()
    {
        return $this->mediaUrlHttps;
    }

    /**
     * Set mediaUrlHttps
     *
     * @param  string $mediaUrlHttps
     * @return Media
     */
    public function setMediaUrlHttps($mediaUrlHttps)
    {
        $this->mediaUrlHttps = $mediaUrlHttps;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set type
     *
     * @param  string $type
     * @return Media
     */
    public function setType($type)
    {
        $this->type = $type;

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
     * @return Media
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }
}
