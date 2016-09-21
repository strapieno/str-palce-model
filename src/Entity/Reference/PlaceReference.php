<?php
namespace Strapieno\Place\Model\Entity\Reference;

use Strapieno\Place\Model\PlaceModelService;
use Strapieno\Utils\Model\Object\AbstractObject;
use Strapieno\Utils\Model\Object\EntityReference\EntityReferenceInterface;
use Strapieno\Utils\Model\Object\EntityReference\EntityReferenceTrait;
use Strapieno\Utils\Model\Object\ObjectInterface;

/**
 * Class PlaceReference
 */
class PlaceReference extends AbstractObject implements ObjectInterface, EntityReferenceInterface
{
    use EntityReferenceTrait;

    /**
     * @return String
     */
    public function getServiceName()
    {
        return PlaceModelService::class;
    }
}