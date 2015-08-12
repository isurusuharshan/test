<?php
/**
 * Created by PhpStorm.
 * User: Isuru
 * Date: 8/12/15
 * Time: 10:13 AM
 */

namespace Base\DataAccessBundle\PMS;

/**
 * Fetch data from the PMS database and format data
 * Class FetchData
 * @package Base\DataAccessBundle\PMS
 */
class FetchData extends Base{

    /**
     * testing function
     * @return int
     */
    public function getRooms(){
        return $this->getResponseBody('rooms_detail');
    }

} 