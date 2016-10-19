<?php
namespace Strapieno\Place\Model\Criteria\Mongo;

use Matryoshka\Model\Wrapper\Mongo\Criteria\FindAllCriteria;

/**
 * Class PlaceCollectionCriteria
 */
class PlaceMongoCollectionCriteria extends FindAllCriteria
{
    /***
     * @param $hide
     * @return $this
     */
    public function setHide($hide)
    {
        if (is_string($hide) && strpos($hide, ',') !== false) {
            $hide = explode(",", $hide);
        }

        if (is_array($hide)) {
            foreach ($hide as $item) {
                $this->projectionFields[$item] = 0;
            }
        }
        return $this;
    }
}