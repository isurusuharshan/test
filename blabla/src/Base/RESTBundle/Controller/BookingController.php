<?php
/**
 * Created by PhpStorm.
 * User: Isuru
 * Date: 8/12/15
 * Time: 9:56 AM
 */

namespace Base\RESTBundle\Controller;


use Symfony\Component\HttpFoundation\Response;

class BookingController extends BaseController{

    /**
     * ! Test action , Tests PMS Service
     * @return Response
     */
    public function testOneAction(){
        $rooms = $this->pms()->fetch()->getRooms();

        // Do some processing about rooms here...

        return $this->handleResponse($rooms);
    }

    /**
     * ! Test action , Tests Database connections
     * @return Response
     */
    public function testTwoAction(){
        $visitors = $this->getRepository('Visitors')->findAll();
        // Do some processing about rooms here...

        return $this->handleResponse(count($visitors));
    }

} 