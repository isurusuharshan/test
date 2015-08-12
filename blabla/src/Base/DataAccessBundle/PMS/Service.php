<?php
/**
 * Created by PhpStorm.
 * User: Isuru
 * Date: 8/12/15
 * Time: 9:34 AM
 */

namespace Base\DataAccessBundle\PMS;

/**
 * Expose PMS as a service
 * Class Service
 * @package Base\DataAccessBundle\PMS
 */
class Service {

    // dependency injection
    private $guzzle;
    private $security;
    private $doctrine;
    private $session;

    // Instances related to the PMS service
    private $fetch = null;
    private $flush = null;

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
     * Get singleton instance of FetchData if one exist
     * @return FetchData|null
     */
    public function fetch()
    {
        if(!isset($this->fetch))
            $this->fetch = new FetchData($this->guzzle,$this->security,$this->doctrine,$this->session);
        return $this->fetch;
    }

    /**
     * Get singleton instance of FlushData if one exist
     * @return FlushData|null
     */
    public function flush()
    {
        if(!isset($this->flush))
            $this->flush = new FlushData($this->guzzle,$this->security,$this->doctrine,$this->session);
        return $this->flush;
    }
} 