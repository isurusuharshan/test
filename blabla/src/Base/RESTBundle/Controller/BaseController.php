<?php
/**
 * Created by PhpStorm.
 * User: Isuru
 * Date: 8/12/15
 * Time: 9:53 AM
 */

namespace Base\RESTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BaseController extends Controller{

    /**
     * get entity manager
     * @return mixed
     */
    protected function getEntityManager(){
        return $this->get('doctrine')->getManager();
    }

    /**
     * get entity repository class
     * @param $class
     * @return mixed
     */
    protected function getRepository($class){
        return $this->get('doctrine')->getManager()->getRepository('BaseDataAccessBundle:'.$class);
    }
    /**
     * Access PMS service
     * @return object
     */
    protected function pms(){
        return $this->get('data_access.pms');
    }

    /**
     * Serialize function, ! More sophisticated generic serializations should be handled here
     * @param $data , data to be serialized
     * @param string $type , serialization type
     * @return string
     */
    protected function serialize($data,$type='json'){
        return is_string($data) ? $data:json_encode($data);
    }

    /**
     * ! More generic response handling method to be implemented
     * @param $data , Data to be sent
     * @param int $code , status code
     * @return Response
     */
    protected function handleResponse($data,$code=200){
        $serialized = $this->serialize($data);
        return new Response($serialized,$code);
    }

} 