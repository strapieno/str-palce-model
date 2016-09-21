<?php
namespace Strapieno\Place\ModelTest\Entity\Object;

use Strapieno\Place\Model\Entity\Object\GeoCoordinateObject;

/**
 * Class GeoCoordinateObjectTest
 */
class GeoCoordinateObjectTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var GeoCoordinateObject
     */
    protected $object;

    public function setUp()
    {
        $this->object = new GeoCoordinateObject();
    }

    public function testGetSetLongitude()
    {
        $input = "test";
        $this->object->setLongitude($input);
        $this->assertSame($input, $this->object->getLongitude());
    }
}