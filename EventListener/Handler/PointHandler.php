<?php

namespace Stocarul\TwitterBundle\EventListener\Handler;

use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\GraphNavigator;
use JMS\Serializer\JsonDeserializationVisitor;
use JMS\Serializer\Context;
use Stocarul\TwitterBundle\Model\Geometry\Point;

/**
 * Class: PointHandler
 *
 * @see SubscribingHandlerInterface
 */
class PointHandler implements SubscribingHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getSubscribingMethods()
    {
        return array(
            array(
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format' => 'json',
                'type' => 'Stocarul\TwitterBundle\Model\Geometry\Point',
            ),
        );
    }

    /**
     * deserializePointFromJson
     *
     * @param JsonDeserializationVisitor $visitor
     * @param array                      $obj
     * @param array                      $type
     * @param Context                    $context
     *
     * @return Point|null
     */
    public function deserializePointFromJson(JsonDeserializationVisitor $visitor, array $obj, array $type, Context $context)
    {
        if (true === is_null($obj) || false == isset($obj['coordinates'])) {
            return null;
        }

        $point = new Point();

        $point
            ->setX($obj['coordinates'][0])
            ->setY($obj['coordinates'][1])
        ;

        return $point;
    }
}
