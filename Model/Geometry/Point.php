<?php

namespace Stocarul\TwitterBundle\Model\Geometry;

use JMS\Serializer\Annotation AS JMS;

/**
 * Class: Point
 *
 */
class Point
{
    /**
     * The x coordinate. Usually a longitude.
     *
     * @var float
     *
     * @JMS\Type("float")
     */
    protected $x;

    /**
     * The y coordinate. Usually a latitude.
     *
     * @var float
     *
     * @JMS\Type("float")
     */
    protected $y;

    /**
     * Get x
     *
     * @return float
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set x
     *
     * @param  float $x
     * @return Point
     */
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get y
     *
     * @return float
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Set y
     *
     * @param  float $y
     * @return Point
     */
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }
}
