<?php
namespace Strapieno\Place\ModelTest\Entity\Object;

use Strapieno\Place\Model\Entity\Object\PostalAddressObject;

/**
 * Class MediaObjectTest
 */
class PostalAddressObjectTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PostalAddressObject
     */
    protected $object;

    public function setUp()
    {
        $this->object = new PostalAddressObject();
    }

    public function testGetSetPostalCode()
    {
        $input = "test";
        $this->object->setPostalCode($input);
        $this->assertSame($input, $this->object->getPostalCode());
    }
}