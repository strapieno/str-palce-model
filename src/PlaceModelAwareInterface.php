<?php
namespace Strapieno\Place\Model;

/**
 * Interface PlaceModelAwareInterface
 */
interface PlaceModelAwareInterface
{
    /**
     * @return null|PlaceModelInterface
     */
    public function getPlaceModelService();

    /**
     * @param PlaceModelInterface $placeModelService
     * @return $this
     */
    public function setPlaceModelService($placeModelService);
}