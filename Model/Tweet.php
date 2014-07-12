<?php

namespace Stocarul\TwitterBundle\Model;

/**
 * Class: Tweet
 *
 */
class Tweet
{
    /**
     * UTC time when this Tweet was created.
     *
     * @var string
     */
    protected $createdAt;

    /**
     * Indicates approximately how many times this Tweet has been "favorited"
     * by Twitter users.
     *
     * @var integer
     */
    protected $favoriteCount;

    /**
     * Indicates the maximum value of the filter_level parameter which may be
     * used and still stream this Tweet. So a value of medium will be streamed
     * on none, low, and medium streams.
     *
     * @var string
     */
    protected $filterLevel;

    /**
     * The integer representation of the unique identifier for this Tweet.
     * This number is greater than 53 bits and some programming languages may
     * have difficulty/silent defects in interpreting it. Using a signed 64 bit
     * integer for storing this identifier is safe. Use id_str for fetching the
     * identifier to stay on the safe side.
     *
     * @var integer
     */
    protected $id;

    /**
     * The string representation of the unique identifier for this Tweet.
     * Implementations should use this rather than the large integer in id.
     *
     * @var string
     */
    protected $idStr;

    /**
     * If the represented Tweet is a reply, this field will contain the
     * screen name of the original Tweet's author.
     *
     * @var string
     */
    protected $inReplyToScreenName;

    /**
     * If the represented Tweet is a reply, this field will contain the integer
     * representation of the original Tweet's ID.
     *
     * @var integer
     */
    protected $inReplyToStatusId;

    /**
     * If the represented Tweet is a reply, this field will contain the string
     * representation of the original Tweet's ID.
     *
     * @var string
     */
    protected $inReplyToStatusIdStr;

    /**
     * If the represented Tweet is a reply, this field will contain the integer
     * representation of the original Tweet's author ID. This will not
     * necessarily always be the user directly mentioned in the Tweet.
     *
     * @var integer
     */
    protected $inReplyToUserId;

    /**
     * If the represented Tweet is a reply, this field will contain the string
     * representation of the original Tweet's author ID. This will not
     * necessarily always be the user directly mentioned in the Tweet.
     *
     * @var mixed
     */
    protected $inReplyToUserIdStr;

    /**
     * When present, indicates a BCP 47 language identifier corresponding to
     * the machine-detected language of the Tweet text, or "und" if no
     * language could be detected.
     *
     * @var string
     */
    protected $lang;

    /**
     * This field only surfaces when a tweet contains a link. The meaning of
     * the field doesn't pertain to the tweet content itself, but instead it
     * is an indicator that the URL contained in the tweet may contain
     * content or media identified as sensitive content.
     *
     * @var boolean
     */
    protected $possiblySensitive;

    /**
     * Number of times this Tweet has been retweeted.
     *
     * @var integer
     */
    protected $retweetCount;

    /**
     * Indicates whether this Tweet has been retweeted by the
     * authenticating user.
     *
     * @var boolean
     */
    protected $retweeted;

    /**
     * Users can amplify the broadcast of tweets authored by other users by
     * retweeting. Retweets can be distinguished from typical Tweets by the
     * existence of a retweeted_status attribute. This attribute contains a
     * representation of the original Tweet that was retweeted. Note that
     * retweets of retweets do not show representations of the intermediary
     * retweet, but only the original tweet. (Users can also unretweet a
     * retweet they created by deleting their retweet.)
     *
     * @var Tweet
     */
    protected $retweetedStatus;

    /**
     * Utility used to post the Tweet, as an HTML-formatted string. Tweets
     * from the Twitter website have a source value of web.
     *
     * @var string
     */
    protected $source;

    /**
     * The actual UTF-8 text of the status update. See twitter-text for
     * details on what is currently considered valid characters.
     *
     * @var string
     */
    protected $text;

    /**
     * When present and set to "true", it indicates that this piece of
     * content has been withheld due to a DMCA complaint.
     *
     * @var boolean
     */
    protected $withheldCopyright;

    /**
     * When present, indicates whether the content being withheld is the
     * "status" or a "user."
     *
     * @var string
     */
    protected $withheldScope;

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
     * @return Tweet
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get favoriteCount
     *
     * @return integer
     */
    public function getFavoriteCount()
    {
        return $this->favoriteCount;
    }

    /**
     * Set favoriteCount
     *
     * @param  integer $favoriteCount
     * @return Tweet
     */
    public function setFavoriteCount($favoriteCount)
    {
        $this->favoriteCount = $favoriteCount;

        return $this;
    }

    /**
     * Get filterLevel
     *
     * @return string
     */
    public function getFilterLevel()
    {
        return $this->filterLevel;
    }

    /**
     * Set filterLevel
     *
     * @param  string $filterLevel
     * @return Tweet
     */
    public function setFilterLevel($filterLevel)
    {
        $this->filterLevel = $filterLevel;

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
     * @return Tweet
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
     * @return Tweet
     */
    public function setIdStr($idStr)
    {
        $this->idStr = $idStr;

        return $this;
    }

    /**
     * Get inReplyToScreenName
     *
     * @return string
     */
    public function getInReplyToScreenName()
    {
        return $this->inReplyToScreenName;
    }

    /**
     * Set inReplyToScreenName
     *
     * @param  string $inReplyToScreenName
     * @return Tweet
     */
    public function setInReplyToScreenName($inReplyToScreenName)
    {
        $this->inReplyToScreenName = $inReplyToScreenName;

        return $this;
    }

    /**
     * Get inReplyToStatusId
     *
     * @return integer
     */
    public function getInReplyToStatusId()
    {
        return $this->inReplyToStatusId;
    }

    /**
     * Set inReplyToStatusId
     *
     * @param  integer $inReplyToStatusId
     * @return Tweet
     */
    public function setInReplyToStatusId($inReplyToStatusId)
    {
        $this->inReplyToStatusId = $inReplyToStatusId;

        return $this;
    }

    /**
     * Get inReplyToStatusIdStr
     *
     * @return string
     */
    public function getInReplyToStatusIdStr()
    {
        return $this->inReplyToStatusIdStr;
    }

    /**
     * Set inReplyToStatusIdStr
     *
     * @param  string $inReplyToStatusIdStr
     * @return Tweet
     */
    public function setInReplyToStatusIdStr($inReplyToStatusIdStr)
    {
        $this->inReplyToStatusIdStr = $inReplyToStatusIdStr;

        return $this;
    }

    /**
     * Get inReplyToUserId
     *
     * @return integer
     */
    public function getInReplyToUserId()
    {
        return $this->inReplyToUserId;
    }

    /**
     * Set inReplyToUserId
     *
     * @param  integer $inReplyToUserId
     * @return Tweet
     */
    public function setInReplyToUserId($inReplyToUserId)
    {
        $this->inReplyToUserId = $inReplyToUserId;

        return $this;
    }

    /**
     * Get inReplyToUserIdStr
     *
     * @return string
     */
    public function getInReplyToUserIdStr()
    {
        return $this->inReplyToUserIdStr;
    }

    /**
     * Set inReplyToUserIdStr
     *
     * @param  string $inReplyToUserIdStr
     * @return Tweet
     */
    public function setInReplyToUserIdStr($inReplyToUserIdStr)
    {
        $this->inReplyToUserIdStr = $inReplyToUserIdStr;

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
     * @return Tweet
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get possiblySensitive
     *
     * @return boolean
     */
    public function getPossiblySensitive()
    {
        return $this->possiblySensitive;
    }

    /**
     * Set possiblySensitive
     *
     * @param  boolean $possiblySensitive
     * @return Tweet
     */
    public function setPossiblySensitive($possiblySensitive)
    {
        $this->possiblySensitive = $possiblySensitive;

        return $this;
    }

    /**
     * Get retweetCount
     *
     * @return integer
     */
    public function getRetweetCount()
    {
        return $this->retweetCount;
    }

    /**
     * Set retweetCount
     *
     * @param  integer $retweetCount
     * @return Tweet
     */
    public function setRetweetCount($retweetCount)
    {
        $this->retweetCount = $retweetCount;

        return $this;
    }

    /**
     * Get retweeted
     *
     * @return boolean
     */
    public function getRetweeted()
    {
        return $this->retweeted;
    }

    /**
     * Set retweeted
     *
     * @param  boolean $retweeted
     * @return Tweet
     */
    public function setRetweeted($retweeted)
    {
        $this->retweeted = $retweeted;

        return $this;
    }

    /**
     * Get retweetedStatus
     *
     * @return Tweet
     */
    public function getRetweetedStatus()
    {
        return $this->retweetedStatus;
    }

    /**
     * Set retweetedStatus
     *
     * @param  Tweet $retweetedStatus
     * @return Tweet
     */
    public function setRetweetedStatus(Tweet $retweetedStatus)
    {
        $this->retweetedStatus = $retweetedStatus;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set source
     *
     * @param  string $source
     * @return Tweet
     */
    public function setSource($source)
    {
        $this->source = $source;

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
     * @param  string $text
     * @return Tweet
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get withheldCopyright
     *
     * @return boolean
     */
    public function getWithheldCopyright()
    {
        return $this->withheldCopyright;
    }

    /**
     * Set withheldCopyright
     *
     * @param  boolean $withheldCopyright
     * @return Tweet
     */
    public function setWithheldCopyright($withheldCopyright)
    {
        $this->withheldCopyright = $withheldCopyright;

        return $this;
    }

    /**
     * Get withheldScope
     *
     * @return string
     */
    public function getWithheldScope()
    {
        return $this->withheldScope;
    }

    /**
     * Set withheldScope
     *
     * @param  string $withheldScope
     * @return Tweet
     */
    public function setWithheldScope($withheldScope)
    {
        $this->withheldScope = $withheldScope;

        return $this;
    }
}
