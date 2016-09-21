<?php
namespace Strapieno\Place\Model;

/**
 * Class PlaceModelAwareTrait
 */
trait PlaceModelAwareTrait
{
    /**
     * @var null|PlaceModelInterface
     */
    protected $placeModelService;

    /**
     * @return null|PlaceModelInterface
     */
    public function getPlaceModelService()
    {
        return $this->placeModelService;
    }

    /**
     * @param PlaceModelInterface $placeModelService
     * @return $this
     */
    public function setPlaceModelService($placeModelService)
    {
        $this->placeModelService = $placeModelService;
        return $this;
    }
}