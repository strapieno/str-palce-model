<?php
namespace Strapieno\Place\Model\Entity;

use Matryoshka\Model\Object\ActiveRecord\AbstractActiveRecord;
use Strapieno\User\Model\Entity\Reference\UserReferenceAwareInterface;
use Strapieno\User\Model\Entity\Reference\UserReferenceAwareTrait;
use Strapieno\Utils\Model\Entity\DateHistoryAwareInterface;
use Strapieno\Utils\Model\Entity\DateHistoryAwareTrait;
use Strapieno\Utils\Model\Entity\EntityInterface;
use Strapieno\Utils\Model\Object\AggregateRating\AggregateRatingAwareInterface;
use Strapieno\Utils\Model\Object\AggregateRating\AggregateRatingAwareTrait;
use Zend\Stdlib\Hydrator\HydratorAwareInterface;

/**
 * Class PlaceEntity
 */
class PlaceEntity  extends AbstractActiveRecord implements EntityInterface,
    DateHistoryAwareInterface,
    HydratorAwareInterface,
    AggregateRatingAwareInterface,
    UserReferenceAwareInterface
{
    use DateHistoryAwareTrait;
    use AggregateRatingAwareTrait;
    use UserReferenceAwareTrait;
}