<?php

namespace App;

use App\Interfaces\PropertyContainerInterface;

class PropertyContainer implements PropertyContainerInterface
{
    /**
     * @var array
     */
    private $propertyContainer = [];

    /**
     * @param $propertyName
     * @param $value
     *
     * @return void
     */
    public function addProperty($propertyName, $value)
    {
        $this->propertyContainer[$propertyName] = $value;
    }

    /**
     * @param $propertyName
     *
     * @return void
     */
    public function deleteProperty($propertyName)
    {
        unset($this->propertyContainer[$propertyName]);
    }

    /**
     * @param $propertyName
     *
     * @return mixed
     */
    public function getPropertyValue($propertyName)
    {
        return $this->propertyContainer[$propertyName] ?? null;
    }

    /**
     * @param $propertyName
     * @param $value
     * @return void
     *
     * @throws \Exception
     */
    public function setPropertyValue($propertyName, $value)
    {
        if (!isset($this->propertyContainer[$propertyName] ))
        {
            throw new \Exception("Property <b>" . $propertyName . "</b> not found");
        }
        $this->propertyContainer[$propertyName] = $value;
    }
}