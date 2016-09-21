<?php
namespace Strapieno\Place\Model\Entity\Object;

use Strapieno\Utils\Model\Object\AbstractObject;
use Strapieno\Utils\Model\Object\AggregateRating\AggregateRatingInterface;
use Strapieno\Utils\Model\Object\AggregateRating\AggregateRatingTrait;
use Strapieno\Utils\Model\Object\ObjectInterface;

/**
 * Class AggregateRatingObject
 */
class AggregateRatingObject extends AbstractObject implements AggregateRatingInterface, ObjectInterface
{
    use AggregateRatingTrait;
}