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

    public function initialize(){
        $this->belongsTo("userId" , "Users"  , "id");
        $this->belongsTo("classId", "Classes", "id");
        $this->belongsTo("raceId" , "Races"  , "id");
    }

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
    public function setRaceId($raceId)
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
    public function setClassId($classId)
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
    public function setUserId($userId)
    {
        $this->userId = $userId;

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
    public function getRaceId()
    {
        return $this->raceId;
    }

    /**
     * Returns the value of field classId
     *
     * @return integer
     */
    public function getClassId()
    {
        return $this->classId;
    }

    /**
     * Returns the value of field userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
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
            'userId' => 'userId'
        );
    }

}
