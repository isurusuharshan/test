<?php
/**
 * Created by PhpStorm.
 * User: Isuru
 * Date: 8/12/15
 * Time: 9:28 AM
 */

namespace Base\DataAccessBundle\PMS;
use Symfony\Component\Yaml\Parser;

class Base {

    // dependency injection
    protected  $guzzle;
    protected $security;
    protected $doctrine;
    protected $session;

    /**
     * Dependency injection via service provider
     * @param $guzzle , Guzzle client
     * @param $security , Symfony security service
     * @param $doctrine , Doctrine service
     * @param $session , Symfony session service
     */
    public function __construct($guzzle,$security,$doctrine,$session){
        $this->guzzle = $guzzle;
        $this->security = $security;
        $this->doctrine = $doctrine;
        $this->session = $session;
    }

    /**
     * Aliase-Route mapper
     * @param $apiAlias
     * @return mixed
     */
    protected function routes($apiAlias){
        $yml = new Parser();
        $routes = $yml->parse(file_get_contents(__DIR__. '/config/routing.yml'));
        return $routes[$apiAlias];
    }

    /**
     * @param $apiAlias
     * @return mixed
     */
    protected function getResponseBody($apiAlias){
        $response = $this->guzzle->get($this->routes($apiAlias));
        return $response->getBody()->__toString();
    }
}