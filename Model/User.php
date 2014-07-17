<?php

namespace Stocarul\TwitterBundle\Model;

use JMS\Serializer\Annotation AS JMS;

/**
 * Class: User
 *
 */
class User
{
    /**
     * The UTC datetime that the user account was created on Twitter.
     *
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $createdAt;

    /**
     * The user-defined UTF-8 string describing their account.
     *
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $description;

    /**
     * Entities which have been parsed out of the url or description
     * fields defined by the user.
     *
     * @var \Stocarul\TwitterBundle\Model\Entity
     *
     * @JMS\Type("Stocarul\TwitterBundle\Model\Entity")
     */
    protected $entities;

    /**
     * The number of tweets this user has favorited in the account's lifetime.
     * British spelling used in the field name for historical reasons.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     */
    protected $favouritesCount;

    /**
     * The number of followers this account currently has.
     * Under certain conditions of duress, this field will temporarily
     * indicate "0."
     *
     * @var integer
     *
     * @JMS\Type("integer")
     */
    protected $followersCount;

    /**
     * The number of users this account is following (AKA their "followings").
     * Under certain conditions of duress, this field will temporarily
     * indicate "0."
     *
     * @var integer
     *
     * @JMS\Type("integer")
     */
    protected $friendsCount;

    /**
     * The integer representation of the unique identifier for this User.
     * This number is greater than 53 bits and some programming languages
     * may have difficulty/silent defects in interpreting it. Using a signed
     * 64 bit integer for storing this identifier is safe. Use id_str for
     * fetching the identifier to stay on the safe side.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     */
    protected $id;

    /**
     * The string representation of the unique identifier for this User.
     * Implementations should use this rather than the large, possibly
     * un-consumable integer in id.
     *
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $idStr;

    /**
     * The BCP 47 code for the user's self-declared user interface language.
     * May or may not have anything to do with the content of their Tweets.
     *
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $lang;

    /**
     * The user-defined location for this account's profile. Not necessarily
     * a location nor parseable. This field will occasionally be fuzzily
     * interpreted by the Search service.
     *
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $location;

    /**
     * The name of the user, as they've defined it. Not necessarily a person's
     * name. Typically capped at 20 characters, but subject to change.
     *
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $name;

    /**
     * The screen name, handle, or alias that this user identifies themselves
     * with. screen_names are unique but subject to change. Use id_str as
     * a user identifier whenever possible. Typically a maximum of
     * 15 characters long, but some historical accounts may exist with
     * longer names.
     *
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $screenName;

    /**
     * If possible, the user's most recent tweet or retweet. In some
     * circumstances, this data cannot be provided and this field will be
     * omitted, null, or empty. Perspectival attributes within tweets
     * embedded within users cannot always be relied upon.
     *
     * @var \Stocarul\TwitterBundle\Model\Tweet[]
     *
     * @JMS\Type("array<Stocarul\TwitterBundle\Model\Tweet>")
     */
    protected $status;

    /**
     * The number of tweets (including retweets) issued by the user.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     */
    protected $statusesCount;

    /**
     * A string describing the Time Zone this user declares themselves within.
     *
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $timeZone;

    /**
     * A URL provided by the user in association with their profile.
     *
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $url;

    /**
     * The offset from GMT/UTC in seconds.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     */
    protected $utcOffset;

    /**
     * Get createdAt
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set createdAt
     *
     * @param  string $createdAt
     * @return User
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set description
     *
     * @param  string $description
     * @return User
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get entities
     *
     * @return \Stocarul\TwitterBundle\Model\Entity
     */
    public function getEntities()
    {
        return $this->entities;
    }

    /**
     * Set entities
     *
     * @param  \Stocarul\TwitterBundle\Model\Entity $entities
     * @return User
     */
    public function setEntities(\Stocarul\TwitterBundle\Model\Entity $entities)
    {
        $this->entities = $entities;

        return $this;
    }

    /**
     * Get favouritesCount
     *
     * @return integer
     */
    public function getFavouritesCount()
    {
        return $this->favouritesCount;
    }

    /**
     * Set favouritesCount
     *
     * @param  integer $favouritesCount
     * @return User
     */
    public function setFavouritesCount($favouritesCount)
    {
        $this->favouritesCount = $favouritesCount;

        return $this;
    }

    /**
     * Get followersCount
     *
     * @return integer
     */
    public function getFollowersCount()
    {
        return $this->followersCount;
    }

    /**
     * Set followersCount
     *
     * @param  integer $followersCount
     * @return User
     */
    public function setFollowersCount($followersCount)
    {
        $this->followersCount = $followersCount;

        return $this;
    }

    /**
     * Get friendsCount
     *
     * @return integer
     */
    public function getFriendsCount()
    {
        return $this->friendsCount;
    }

    /**
     * Set friendsCount
     *
     * @param  integer $friendsCount
     * @return User
     */
    public function setFriendsCount($friendsCount)
    {
        $this->friendsCount = $friendsCount;

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
     * @param  integet $id
     * @return User
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
     * @return User
     */
    public function setIdStr($idStr)
    {
        $this->idStr = $idStr;

        return $this;
    }

    /**
     * Get lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set lang
     *
     * @param  string $lang
     * @return User
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set location
     *
     * @param  string $location
     * @return User
     */
    public function setLocation($location)
    {
        $this->location = $location;

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
     * @param  string $name
     * @return User
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
     * @param  string $screenName
     * @return User
     */
    public function setScreenName($screenName)
    {
        $this->screenName = $screenName;

        return $this;
    }

    /**
     * Get status
     *
     * @return \Stocarul\TwitterBundle\Model\Tweet[]
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set status
     *
     * @param  \Stocarul\TwitterBundle\Model\Tweet[] $status
     * @return User
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get statusesCount
     *
     * @return integer
     */
    public function getStatusesCount()
    {
        return $this->statusesCount;
    }

    /**
     * Set statusesCount
     *
     * @param  integer $statusesCount
     * @return User
     */
    public function setStatusesCount($statusesCount)
    {
        $this->statusesCount = $statusesCount;

        return $this;
    }

    /**
     * Get timeZone
     *
     * @return string
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * Set timeZone
     *
     * @param  string $timeZone
     * @return User
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;

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
     * @return User
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get utcOffset
     *
     * @return integer
     */
    public function getUtcOffset()
    {
        return $this->utcOffset;
    }

    /**
     * Set utcOffset
     *
     * @param  integer $utcOffset
     * @return User
     */
    public function setUtcOffset($utcOffset)
    {
        $this->utcOffset = $utcOffset;

        return $this;
    }
}
