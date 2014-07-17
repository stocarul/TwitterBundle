<?php

namespace Stocarul\TwitterBundle\Tests\EventListener\Handler;

use Stocarul\TwitterBundle\EventListener\Handler\PointHandler;
use Stocarul\TwitterBundle\Model\Geometry\Point;

/**
 * Class: PointHandlerTest
 *
 * @see \PHPUnit_Framework_TestCase
 */
class PointHandlerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * testDeserializePointFromJsonWhenEmpty
     *
     */
    public function testDeserializePointFromJsonWhenEmpty()
    {
        $pointHandler = $this->constructPointHandler();

        $point = $pointHandler->deserializePointFromJson(
            $this->getJsonDeserializationVisitor(),
            array(),
            array(),
            $this->getContext()
        );

        $this->assertNull($point);
    }

    /**
     * testDeserializePointFromJsonWhenValid
     *
     */
    public function testDeserializePointFromJsonWhenValid()
    {
        $pointHandler = $this->constructPointHandler();
        $param = array(
            'coordinates' => array(
                13,
                31,
            ),
        );

        $point = $pointHandler->deserializePointFromJson(
            $this->getJsonDeserializationVisitor(),
            $param,
            array(),
            $this->getContext()
        );

        $expectedPoint = new Point();
        $expectedPoint->setX(13);
        $expectedPoint->setY(31);

        $this->assertEquals($expectedPoint, $point);
    }

    /**
     * constructPointHandler
     *
     * @return PointHandler
     */
    public function constructPointHandler()
    {
        return new PointHandler();
    }

    /**
     * getJsonDeserializationVisitor
     *
     * @return \JMS\Serializer\JsonDeserializationVisitor
     */
    public function getJsonDeserializationVisitor()
    {
        return $this
            ->getMockBuilder('JMS\Serializer\JsonDeserializationVisitor')
            ->disableOriginalConstructor()
            ->getMock();
    }

    /**
     * getContext
     *
     * @return \JMS\Serializer\Context
     */
    public function getContext()
    {
        return $this
            ->getMockBuilder('JMS\Serializer\Context')
            ->disableOriginalConstructor()
            ->getMock();
    }
}
