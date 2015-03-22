<?php
use Phalcon\Mvc\Model\MetaData;

class CollectableLocationItems extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $locationItemId;

    /**
     *
     * @var string
     */
    protected $name;

    /**
     *
     * @var integer
     */
    protected $locationId;

    /**
     * Method to set the value of field locationItemId
     *
     * @param integer $locationItemId
     * @return $this
     */
    public function setLocationitemid($locationItemId)
    {
        $this->locationItemId = $locationItemId;

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
     * Returns the value of field locationItemId
     *
     * @return integer
     */
    public function getLocationitemid()
    {
        return $this->locationItemId;
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
     * Returns the value of field locationId
     *
     * @return integer
     */
    public function getLocationid()
    {
        return $this->locationId;
    }


    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSource('collectableLocationItems');
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'locationItemId' => 'locationItemId', 
            'name' => 'name', 
            'locationId' => 'locationId'
        );
    }

    public function metaData()
    {
        return array(
            MetaData::MODELS_ATTRIBUTES => array(
                'locationItemId', 'name', 'locationId'
            ),

            MetaData::MODELS_PRIMARY_KEY => array(
                'locationItemId'
            ),

            MetaData::MODELS_NON_PRIMARY_KEY => array(
                'name', 'locationId'
            ),

            MetaData::MODELS_IDENTITY_COLUMN => 'locationItemId',
        );
    }

}
