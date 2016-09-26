<?php
namespace Strapieno\Place\Model\Entity\Object;

use Strapieno\Utils\Model\Object\AbstractObject;
use Strapieno\Utils\Model\Object\Media\MediaInterface;
use Strapieno\Utils\Model\Object\Media\MediaTrait;
use Strapieno\Utils\Model\Object\ObjectInterface;
use Zend\Stdlib\Hydrator\Filter\FilterComposite;
use Zend\Stdlib\Hydrator\Filter\MethodMatchFilter;

/**
 * Class MediaObject
 */
class MediaObject extends AbstractObject implements MediaInterface, ObjectInterface, RefIdentityInterface
{
    use MediaTrait;
    use RefIdentityTrait;

    public function getHydrator()
    {
        if (!$this->hydrator) {
            $this->hydrator = parent::getHydrator();
            $this->hydrator->addFilter(
                'refIdentity',
                new MethodMatchFilter('getRefIdentity', true),
                FilterComposite::CONDITION_AND
            );
        }
        return $this->hydrator;
    }
}