<?php

namespace Stocarul\TwitterBundle\Tests\Factory;

use Stocarul\TwitterBundle\Factory\TweetFactory;
use JMS\Serializer\SerializerInterface;

/**
 * Class: TweetFactoryTest
 *
 * @see \PHPUnit_Framework_TestCase
 */
class TweetFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * testConstructArray
     *
     */
    public function testConstructArray()
    {
        $serializer = $this->getMock('JMS\Serializer\SerializerInterface');

        $serializer
            ->expects($this->once())
            ->method('deserialize')
            ->with(
                $this->equalTo(json_encode($this->getArrayParameter())),
                $this->equalTo('array<Stocarul\TwitterBundle\Model\Tweet>'),
                $this->equalTo('json')
            )
            ->will($this->returnValue($this->getArrayResponse()))
        ;

        $tweetFactory = new TweetFactory($serializer);

        $this->assertEquals(
            $this->getArrayResponse(),
            $tweetFactory->constructArray($this->getArrayParameter())
        );
    }

    /**
     * testConstructObject
     *
     */
    public function testConstructObject()
    {
        $serializer = $this->getMock('JMS\Serializer\SerializerInterface');

        $serializer
            ->expects($this->once())
            ->method('deserialize')
            ->with(
                $this->equalTo(json_encode($this->getObjectParameter())),
                $this->equalTo('Stocarul\TwitterBundle\Model\Tweet'),
                $this->equalTo('json')
            )
            ->will($this->returnValue($this->getArrayResponse()))
        ;

        $tweetFactory = new TweetFactory($serializer);

        $this->assertEquals(
            $this->getArrayResponse(),
            $tweetFactory->constructObject($this->getObjectParameter())
        );
    }

    /**
     * getArrayParameter
     *
     * @return array
     */
    public function getArrayParameter()
    {
        return array(
            'a' => 'b',
            '13' => '31',
        );
    }

    /**
     * getArrayResponse
     *
     * @return array
     */
    public function getArrayResponse()
    {
        return array(
            array(
                'a' => 'b',
            ),
            array(
                '13' => '31',
            ),
        );
    }

    /**
     * getObjectParameter
     *
     * @return \stdClass
     */
    public function getObjectParameter()
    {
        return json_decode(json_encode($this->getArrayParameter()));
    }
}
