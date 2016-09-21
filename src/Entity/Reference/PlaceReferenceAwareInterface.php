<?php
namespace Strapieno\Place\Model\Entity\Reference;

/**
 * Interface PlaceReferenceAwareInterface
 */
interface PlaceReferenceAwareInterface
{
    /**
     * @return PlaceReference|null
     */
    public function getPlaceReference();

    /**
     * @param PlaceReference $placeReference
     * @return $this
     */
    public function setPlaceReference(PlaceReference $placeReference);
}