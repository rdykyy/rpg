<?php
use Phalcon\Mvc\Model\MetaData,
    Phalcon\Mvc\Model\Resultset\Simple as ResultSet;;

class AttackableLocationItems extends \Phalcon\Mvc\Model
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
        $this->setSource('attackableLocationItems');
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

    public function getCreepsByLocationItemId($locationItemId) {
        $sql = "SELECT c.* from creeps c JOIN attackableLocationItemsCreeps lic on lic.attackableLocationItemId = $locationItemId and c.creepId=lic.creepId";
        $creeps = (new ResultSet (null, $this, $this->getReadConnection()->query($sql)))->toArray();

        return $creeps;
    }

}
