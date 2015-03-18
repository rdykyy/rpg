<?php
use Phalcon\Mvc\Model\MetaData;

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

    public $races;

    public $classes;

    public function metaData()
    {
        return array(

            //Every column in the mapped table
            MetaData::MODELS_ATTRIBUTES => array(
                'heroId', 'name', 'level', 'raceId', 'classId', 'userId', 'locationId', 'xp'
            ),

            //Every column part of the primary key
            MetaData::MODELS_PRIMARY_KEY => array(
                'heroId'
            ),

            //Every column that isn't part of the primary key
            MetaData::MODELS_NON_PRIMARY_KEY => array(
                'name', 'level', 'raceId', 'classId', 'userId', 'locationId', 'xp'
            ),

            //Every column that doesn't allows null values
//            MetaData::MODELS_NOT_NULL => array(
//                'id', 'name', 'type', 'year'
//            ),
//
//            //Every column and their data types
//            MetaData::MODELS_DATA_TYPES => array(
//                'id' => Column::TYPE_INTEGER,
//                'name' => Column::TYPE_VARCHAR,
//                'type' => Column::TYPE_VARCHAR,
//                'year' => Column::TYPE_INTEGER
//            ),
//
//            //The columns that have numeric data types
//            MetaData::MODELS_DATA_TYPES_NUMERIC => array(
//                'id' => true,
//                'year' => true,
//            ),

            //The identity column, use boolean false if the model doesn't have
            //an identity column
            MetaData::MODELS_IDENTITY_COLUMN => 'heroId',

            //How every column must be bound/casted
//            MetaData::MODELS_DATA_TYPES_BIND => array(
//                'id' => Column::BIND_PARAM_INT,
//                'name' => Column::BIND_PARAM_STR,
//                'type' => Column::BIND_PARAM_STR,
//                'year' => Column::BIND_PARAM_INT,
//            ),
//
//            //Fields that must be ignored from INSERT SQL statements
//            MetaData::MODELS_AUTOMATIC_DEFAULT_INSERT => array(
//                'year' => true
//            ),
//
//            //Fields that must be ignored from UPDATE SQL statements
//            MetaData::MODELS_AUTOMATIC_DEFAULT_UPDATE => array(
//                'year' => true
//            )

        );
    }

    public function initialize()
    {
        $this->hasManyToMany(
            "heroesId",
            "HeroesSkills",
            "heroId",
            "skillId",
            "Skills",
            "skillId"
        );
    }

    public function onConstruct()
    {
        $conf =$this->getDI()->get('gameConfig');
        $this->races = $conf->races->toArray();
        $this->classes = $conf->classes->toArray();
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
