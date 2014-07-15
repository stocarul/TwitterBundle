<?php

namespace Stocarul\TwitterBundle\Model;

use JMS\Serializer\Annotation AS JMS;

/**
 * Class: Hashtag
 *
 */
class Hashtag
{
    /**
     * An array of integers indicating the offsets within the Tweet text where
     * the hashtag begins and ends. The first integer represents the location
     * of the # character in the Tweet text string. The second integer
     * represents the location of the first character after the hashtag.
     * Therefore the difference between the two numbers will be the length of
     * the hashtag name plus one (for the '#' character).
     *
     * @var integer[]
     *
     * @JMS\Type("array<integer>")
     */
    protected $indices;

    /**
     * Name of the hashtag, minus the leading '#' character.
     *
     * @var stirng
     *
     * @JMS\Type("string")
     */
    protected $text;

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
     * @return Hashtag
     */
    public function setIndices($indices)
    {
        $this->indices = $indices;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set text
     *
     * @param  string  $text
     * @return Hashtag
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }
}
