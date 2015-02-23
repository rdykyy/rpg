<?php

class Locations extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $locationId;

    /**
     *
     * @var integer
     */
    protected $landId;

    /**
     *
     * @var string
     */
    protected $name;

    /**
     *
     * @var string
     */
    protected $description;

    public function initialize(){
        $this->hasMany("locationId", "Locations", "locationId");
    }


    /**
     * Method to set the value of field locationId
     *
     * @param integer $locationId
     * @return $this
     */

    public function setLocationid($locationId)
    {
        $this->locationId = $locationId;

        return $this;
    }

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
     * Method to set the value of field description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Returns the value of field locationId
     *
     * @return integer
     */
    public function getLocationid()
    {
        return $this->locationId;
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
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the value of field description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'locationId' => 'locationId', 
            'landId' => 'landId', 
            'name' => 'name', 
            'description' => 'description'
        );
    }

}
