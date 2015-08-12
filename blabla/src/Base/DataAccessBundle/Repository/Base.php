<?php
/**
 * Created by JetBrains PhpStorm.
 * User: my pc
 * Date: 4/5/14
 * Time: 3:43 PM
 * To change this template use File | Settings | File Templates.
 */
namespace Base\DataAccessBundle\Repository;
use Doctrine\ORM\EntityRepository;
class Base extends EntityRepository
{

    protected $documentPath = 'Base\DataAccessBundle\Entity\\';
    /**
     * retuns a new instance of an entity
     */
    public function getNewEntity($class)
    {
        $object = '\\'.$this->documentPath.$class;
        return new $object();
    }

    /**
     * get the current date/time
     * @return string
     */
    protected function getCurrentDateTime()
    {
        $dateTime = new \DateTime('now',new \DateTimeZone('Asia/Colombo'));
        return $dateTime;
    }

    /**
     * Repository Shortcut
     * @param $class
     */
    protected function getRepository($class)
    {
        $this->getRepository('BaseDataAccessBundle:'.$class);
    }

    /**
     * QueryBuilder shortcut
     * @param $class
     * @return mixed
     */
    protected function getQueryBuilder($class){
        return $this->getQueryBuilder('BaseDataAccessBundle:'.$class);
    }
}
