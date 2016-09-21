<?php
namespace Strapieno\Place\Model\Entity\Object;

use Strapieno\Utils\DataStructure\RefIdentityInteface;
use Strapieno\Utils\Model\Object\AbstractObject;
use Strapieno\Utils\Model\Object\Media\MediaInterface;
use Strapieno\Utils\Model\Object\Media\MediaTrait;
use Strapieno\Utils\Model\Object\ObjectInterface;
use Zend\Stdlib\Hydrator\Filter\FilterComposite;
use Zend\Stdlib\Hydrator\Filter\MethodMatchFilter;

/**
 * Class MediaObject
 */
class MediaObject extends AbstractObject implements MediaInterface, ObjectInterface, RefIdentityInteface
{
    use MediaTrait;

    /**
     * @return mixed
     */
    public function getRefIdentity()
    {
        return $this->embedUrl;
    }

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