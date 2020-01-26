<?php


namespace App;


use App\Traits\SingletoneTrait;
use App\Interfaces\ObjectPoolInterface;
use mysql_xdevapi\Exception;

class ObjectPool
{
    use SingletoneTrait;

    /**
     * @var array
     */
    private $clones = [];

    /**
     * @var array
     */
    private $prototypes = [];

    /**
     * @param ObjectPoolInterface $obj
     *
     * @return $this
     */
    public function addObject(ObjectPoolInterface $obj)
    {
        $key = $this->getObjectKey($obj);
        $this->prototypes[$key] = $obj;

        return $this;
    }

    /**
     * @param object|string $obj
     *
     * @return string
     */
    private function getObjectKey($obj)
    {
        if (is_object($obj)) {
            $key = get_class($obj);
        } elseif (is_string($obj)) {
            $key = $obj;
        } else {
            throw new Exception('Unknown data');
        }

        return $key;
    }

    /**
     * @param string $className
     *
     * @return bool|object|null
     */
    public function getObject (string $className)
    {
        $key = $this->getObjectKey($className);

        if (isset($this->clones[$key])) {
            return false;
        }

        if (empty($this->prototypes[$key])) {
            return null;
        }

        $this->clones[$key] = clone $this->prototypes[$key];

        return $this->clones[$key];
    }

    /**
     * @param ObjectPoolInterface $obj
     *
     * @return void
     */
    public function returnToPool(ObjectPoolInterface $obj)
    {
        $key = $this->getObjectKey($obj);
        unset($this->clones[$key]);
        $obj = null;
    }
}