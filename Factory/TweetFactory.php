<?php

namespace Stocarul\TwitterBundle\Factory;

use Stocarul\TwitterBundle\Model\Tweet;
use JMS\Serializer\SerializerInterface;

/**
 * Class: TweetFactory
 *
 */
class TweetFactory
{
    /**
     * serializer
     *
     * @var SerializerInterface
     */
    protected $serializer;

    /**
     * TweetFactory constructor
     *
     * @param SerializerInterface $serializer
     */
    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * Construct an array of Tweets
     *
     * @param \stdClass[] $arr
     *
     * @return Tweet[]
     */
    public function constructArray($arr = array())
    {
        return $this
            ->serializer
            ->deserialize(
                json_encode($arr),
                'array<Stocarul\TwitterBundle\Model\Tweet>',
                'json'
            );
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
        return $this
            ->serializer
            ->deserialize(
                json_encode($obj),
                'Stocarul\TwitterBundle\Model\Tweet',
                'json'
            );
    }
}
