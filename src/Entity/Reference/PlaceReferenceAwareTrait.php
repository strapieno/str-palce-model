<?php
namespace Strapieno\Place\Model\Entity\Reference;

/**
 * Class PlaceReferenceAwareInterface
 */
trait PlaceReferenceAwareTrait
{
    /**
     * @var PlaceReference|null
     */
    protected $placeReference;

    /**
     * @return PlaceReference|null
     */
    public function getPlaceReference()
    {
        return $this->placeReference;
    }

    /**
     * @param PlaceReference $placeReference
     * @return $this
     */
    public function setPlaceReference(PlaceReference $placeReference)
    {
        $this->placeReference = $placeReference;
        return $this;
    }
}