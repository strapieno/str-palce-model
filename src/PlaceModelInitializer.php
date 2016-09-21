<?php
namespace Strapieno\Place\Model;

use Strapieno\Utils\Initializer\AbstractModelServiceInitializer;

/**
 * Class PlaceModelInitializer
 */
class PlaceModelInitializer extends AbstractModelServiceInitializer
{
    const SERVICE_NAME = PlaceModelService::class;
    const INSTANCE_CLASS = PlaceModelAwareInterface::class;
    const SETTER_METHOD = 'setPlaceModelService';
}