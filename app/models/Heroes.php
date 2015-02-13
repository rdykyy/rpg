<?php

class Heroes extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id;

    /**
     *
     * @var string
     */
    protected $name;

    /**
     *
     * @var integer
     */
    protected $level;

    /**
     *
     * @var integer
     */
    protected $raceId;

    /**
     *
     * @var integer
     */
    protected $classId;

    /**
     *
     * @var integer
     */
    protected $userId;

    /**
     *
     * @var integer
     */
    protected $locationId;

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

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
     * Method to set the value of field level
     *
     * @param integer $level
     * @return $this
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Method to set the value of field raceId
     *
     * @param integer $raceId
     * @return $this
     */
    public function setRaceid($raceId)
    {
        $this->raceId = $raceId;

        return $this;
    }

    /**
     * Method to set the value of field classId
     *
     * @param integer $classId
     * @return $this
     */
    public function setClassid($classId)
    {
        $this->classId = $classId;

        return $this;
    }

    /**
     * Method to set the value of field userId
     *
     * @param integer $userId
     * @return $this
     */
    public function setUserid($userId)
    {
        $this->userId = $userId;

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
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
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
     * Returns the value of field level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Returns the value of field raceId
     *
     * @return integer
     */
    public function getRaceid()
    {
        return $this->raceId;
    }

    /**
     * Returns the value of field classId
     *
     * @return integer
     */
    public function getClassid()
    {
        return $this->classId;
    }

    /**
     * Returns the value of field userId
     *
     * @return integer
     */
    public function getUserid()
    {
        return $this->userId;
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
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'name' => 'name', 
            'level' => 'level', 
            'raceId' => 'raceId', 
            'classId' => 'classId', 
            'userId' => 'userId', 
            'locationId' => 'locationId'
        );
    }

}
