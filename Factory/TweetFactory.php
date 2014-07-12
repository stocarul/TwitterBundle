<?php

namespace Stocarul\TwitterBundle\Factory;

use Stocarul\TwitterBundle\Model\Tweet;

/**
 * Class: TweetFactory
 *
 */
class TweetFactory
{
    /**
     * Construct an array of Tweets
     *
     * @param \stdClass[] $arr
     *
     * @return Tweet[]
     */
    public function constructArray($arr = array())
    {
        $ret = array();

        if (true === is_array($arr)) {
            foreach ($arr as $obj) {
                $tweet = $this->constructObject($obj);

                if ($tweet instanceof Tweet) {
                    $ret[] = $tweet;
                }
            }
        }

        return $ret;
    }

    /**
     * Construct a single Tweet object
     *
     * @param \stdClass $obj
     *
     * @return Tweet|null
     */
    public function constructObject(\stdClass $obj = null)
    {
        if (false === is_object($obj)) {
            return null;
        }

        $t = new Tweet();

        $t
            ->setCreatedAt($this->propertyValue($obj, 'created_at'))
            ->setFavoriteCount($this->propertyValue($obj, 'favorite_count'))
            ->setFilterLevel($this->propertyValue($obj, 'filter_level'))
            ->setId($this->propertyValue($obj, 'id'))
            ->setIdStr($this->propertyValue($obj, 'id_str'))
            ->setInReplyToScreenName($this->propertyValue($obj, 'in_reply_to_screen_name'))
            ->setInReplyToStatusId($this->propertyValue($obj, 'in_reply_to_status_id'))
            ->setInReplyToStatusIdStr($this->propertyValue($obj, 'in_reply_to_status_id_str'))
            ->setInReplyToUserId($this->propertyValue($obj, 'in_reply_to_user_id'))
            ->setInReplyToUserIdStr($this->propertyValue($obj, 'in_reply_to_user_id_str'))
            ->setLang($this->propertyValue($obj, 'lang'))
            ->setPossiblySensitive($this->propertyValue($obj, 'possibly_sensitive'))
            ->setRetweetCount($this->propertyValue($obj, 'retweeted_count'))
            ->setRetweeted($this->propertyValue($obj, 'retweeted'))
            ->setSource($this->propertyValue($obj, 'source'))
            ->setText($this->propertyValue($obj, 'text'))
            ->setWithheldCopyright($this->propertyValue($obj, 'withheld_copyright'))
            ->setWithheldScope($this->propertyValue($obj, 'withheld_scope'))
        ;

        if (property_exists($obj, 'retweeted_status')) {
            $t->setRetweetedStatus($this->constructObject($obj->retweeted_status));
        }

        return $t;
    }

    /**
     * propertyValue
     *
     * @param \stdClass $obj
     * @param string    $property
     *
     * @return mixed|null
     */
    protected function propertyValue(\stdClass $obj, $property)
    {
        if (property_exists($obj, $property)) {
            return $obj->{$property};
        }

        return null;
    }
}
