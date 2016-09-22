<?php
namespace Strapieno\Place\ModelTest\Entity;

use Strapieno\Place\Model\Entity\PlaceEntity;

/**
 * Class GeoCoordinateObjectTest
 */
class PlaceEntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PlaceEntity
     */
    protected $object;

    public function setUp()
    {
        $this->object = new PlaceEntity();
    }

    public function testGetSetDescription()
    {
        $input = "test";
        $this->object->setId($input);
        $this->assertSame($input, $this->object->getId());
    }
}