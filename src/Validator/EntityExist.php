<?php
namespace Strapieno\Place\Model\Validator;

use Strapieno\Place\Model\PlaceModelAwareInterface;
use Strapieno\Place\Model\PlaceModelAwareTrait;
use Strapieno\Utils\Validator\Model\AbstractEntityExist;
use Zend\Validator\ValidatorInterface;

/**
 * Class EntityExist
 */
class EntityExist extends AbstractEntityExist implements ValidatorInterface, PlaceModelAwareInterface
{
    use PlaceModelAwareTrait;

    const GETTER_METHOD_NAME = 'getPlaceModelService';

    /**
     * @var array
     */
    protected $messageTemplates = [
        self::ID_NOT_EXISTS => 'The id does not exist',
        self::NOT_MONGO_ID  => 'Identifier format not valid'
    ];

    protected function getModelMethodService()
    {
        return EntityExist::GETTER_METHOD_NAME;
    }
}