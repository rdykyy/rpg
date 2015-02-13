<?php

class Lands extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $landId;

    /**
     *
     * @var integer
     */
    protected $worldId;

    /**
     *
     * @var string
     */
    protected $name;

    /**
     * Method to set the value of field landId
     *
     * @param integer $landId
     * @return $this
     */
    public function setLandid($landId)
    {
        $this->landId = $landId;

        return $this;
    }

    /**
     * Method to set the value of field worldId
     *
     * @param integer $worldId
     * @return $this
     */
    public function setWorldid($worldId)
    {
        $this->worldId = $worldId;

        return $this;
    }

    /**
     * Method to set the value of field name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Returns the value of field landId
     *
     * @return integer
     */
    public function getLandid()
    {
        return $this->landId;
    }

    /**
     * Returns the value of field worldId
     *
     * @return integer
     */
    public function getWorldid()
    {
        return $this->worldId;
    }

    /**
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'landId' => 'landId', 
            'worldId' => 'worldId', 
            'name' => 'name'
        );
    }

}
