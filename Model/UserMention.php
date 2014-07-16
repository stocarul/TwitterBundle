<?php

namespace Stocarul\TwitterBundle\Model;

use JMS\Serializer\Annotation AS JMS;

class UserMention
{
    /**
     * ID of the mentioned user, as an integer.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     */
    protected $id;

    /**
     * If of the mentioned user, as a string.
     *
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $idStr;

    /**
     * An array of integers representing the offsets within the Tweet text
     * where the user reference begins and ends. The first integer represents
     * the location of the '@' character of the user mention. The second
     * integer represents the location of the first non-screenname character
     * following the user mention.
     *
     * @var integer[]
     *
     * @JMS\Type("array<integer>")
     */
    protected $indices;

    /**
     * Display name of the referenced user.
     *
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $name;

    /**
     * Screen name of the referenced user.
     *
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $screenName;

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
     * @param  integer     $id
     * @return UserMention
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
     * @param  string      $idStr
     * @return UserMention
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
     * @param  integer[]   $indices
     * @return UserMention
     */
    public function setIndices($indices)
    {
        $this->indices = $indices;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name
     *
     * @param  string      $name
     * @return UserMention
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get screenName
     *
     * @return string
     */
    public function getScreenName()
    {
        return $this->screenName;
    }

    /**
     * Set screenName
     *
     * @param  string      $screenName
     * @return UserMention
     */
    public function setScreenName($screenName)
    {
        $this->screenName = $screenName;

        return $this;
    }
}
