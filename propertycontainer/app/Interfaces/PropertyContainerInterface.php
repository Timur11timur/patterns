<?php

namespace App\Interfaces;

/**
 * Interface PropertyContainerInterface
 */
interface PropertyContainerInterface
{
    /**
     * @param $propertyName
     * @param $value
     *
     * @return void
     */
    public function addProperty($propertyName, $value);

    /**
     * @param $propertyName
     *
     * @return void
     */
    public function deleteProperty($propertyName);

    /**
     * @param $propertyName
     *
     * @return mixed
     */
    public function getPropertyValue($propertyName);

    /**
     * @param $propertyName
     * @param $value
     *
     * @return void
     */
    public function setPropertyValue($propertyName, $value);
}