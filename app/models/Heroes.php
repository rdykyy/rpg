<?php

class Heroes extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $heroId;

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
     *
     * @var integer
     */
    protected $xp;

    public function initialize(){
        $this->belongsTo("userId" , "Users"  , "userId");
        $this->belongsTo("classId", "Classes", "classId");
        $this->belongsTo("raceId" , "Races"  , "raceId");
    }

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setHeroId($id)
    {
        $this->heroId = $id;

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
     * Method to set the value of field xp
     *
     * @param integer $xp
     * @return $this
     */
    public function setXp($xp)
    {
        $this->xp = $xp;

        return $this;
    }

    /**
     * Returns the value of field id
     *
     * @return integer
     */
    public function getHeroId()
    {
        return $this->heroId;
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
     * Returns the value of field xp
     *
     * @return integer
     */
    public function getXp()
    {
        return $this->xp;
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'heroId' => 'heroId',
            'name' => 'name', 
            'level' => 'level', 
            'raceId' => 'raceId', 
            'classId' => 'classId', 
            'userId' => 'userId', 
            'locationId' => 'locationId',
            'xp' => 'xp'
        );
    }

}
