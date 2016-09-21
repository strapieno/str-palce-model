<?php
namespace Strapieno\Place\Model\Entity\Object;

use Strapieno\Utils\Model\Object\AbstractObject;
use Strapieno\Utils\Model\Object\ObjectInterface;
use Strapieno\Utils\Model\Object\PostalAddress\PostalAddressInterface;
use Strapieno\Utils\Model\Object\PostalAddress\PostalAddressTrait;

/**
 * Class MediaObject
 */
class PostalAddressObject extends AbstractObject implements PostalAddressInterface, ObjectInterface
{
    use PostalAddressTrait;
}