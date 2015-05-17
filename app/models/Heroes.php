<?php
use Phalcon\Mvc\Model\MetaData,
    Phalcon\Mvc\Model\Resultset\Simple as ResultSet;

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

    protected $maxHp;

    protected $currentHp;

    protected $maxMp;

    protected $currentMp;

    protected $attack;

    protected $armor;

    protected $skillPoints;


    public $races;

    public $classes;

//    public function metaData()
//    {
//        return array(
//
//            //Every column in the mapped table
//            MetaData::MODELS_ATTRIBUTES => array(
//                'heroId', 'name', 'level', 'raceId', 'classId', 'userId', 'locationId', 'xp',
//                'maxHp', 'currentHp', 'maxMp', 'currentMp', 'attack', 'armor'
//            ),
//
//            //Every column part of the primary key
//            MetaData::MODELS_PRIMARY_KEY => array(
//                'heroId'
//            ),
//
//            //Every column that isn't part of the primary key
//            MetaData::MODELS_NON_PRIMARY_KEY => array(
//                'name', 'level', 'raceId', 'classId', 'userId', 'locationId', 'xp',
//                'maxHp', 'currentHp', 'maxMp', 'currentMp', 'attack', 'armor'
//            ),
//
//            //The identity column, use boolean false if the model doesn't have
//            //an identity column
//            MetaData::MODELS_IDENTITY_COLUMN => 'heroId',
//
//            MetaData::MODELS_DATA_TYPES_NUMERIC => array(
//                'locationId' => true,
//            )
//        );
//    }


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
        $this->locationId = (int)$locationId;

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

    public function setMaxHp($hp)
    {
        $this->maxHp = $hp;

        return $this;
    }

    public function setCurrentHp($hp)
    {
        $this->currentHp = $hp;

        return $this;
    }

    public function setMaxMp($mp)
    {
        $this->maxMp = $mp;

        return $this;
    }

    public function setCurrentMp($mp)
    {
        $this->currentMp = $mp;

        return $this;
    }

    public function setAttack($attack)
    {
        $this->attack = $attack;

        return $this;
    }

    public function setArmor($armor)
    {
        $this->armor = $armor;

        return $this;
    }

    public function setSkillPoints($skillPoints)
    {
        $this->skillPoints = $skillPoints;

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

    public function getMaxHp()
    {
        return $this->maxHp;
    }

    public function getCurrentHp()
    {
        return $this->currentHp;
    }

    public function getMaxMp()
    {
        return $this->maxMp;
    }

    public function getCurrentMp()
    {
        return $this->currentMp;
    }

    public function getAttack()
    {
        return $this->attack;
    }

    public function getArmor()
    {
        return $this->armor;
    }

    public function getSkillPoints()
    {
        return $this->skillPoints;
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return [
            'heroId' => 'heroId',
            'name' => 'name', 
            'level' => 'level', 
            'raceId' => 'raceId', 
            'classId' => 'classId', 
            'userId' => 'userId', 
            'locationId' => 'locationId',
            'xp' => 'xp',
            'maxHp' => 'maxHp',
            'currentHp' => 'currentHp',
            'maxMp' => 'maxMp',
            'currentMp' => 'currentMp',
            'attack' => 'attack',
            'armor' => 'armor',
            'skillPoints' => 'skillPoints'
        ];
    }

    public function getSkills($heroClass, $skillType = 'neutral') {
        if ($skillType === 'neutral') {
            $tableName = 'neutralSkills';
        } else {
            $tableName = strtolower($heroClass) . ucfirst($skillType) . 'Skills';
        }
        $sql = 'SELECT * FROM ' . $tableName . ' where heroId='.$this->heroId;
        $skills = (new ResultSet (null, $this, $this->getReadConnection()->query($sql)))->toArray();

        $result = [];

        foreach ($skills[0] as $key => $value) {
            if ($key === $tableName . 'Id' or $key === 'heroId')
                continue;

            $arr = explode('_', $key);
            $skillId = $arr[1];
            $result[] = SkillFactory::getSkillByIdAndLevel($skillId, $value);
        }
        return $result;
    }

    public function getSkillsForBattle() {
        $sql = 'SELECT * FROM skillsForBattle where heroId='.$this->heroId;
        $skills = (new ResultSet (null, $this, $this->getReadConnection()->query($sql)))->toArray();

        $result = [];

        foreach ($skills[0] as $key => $value) {
            if ($key === 'skillsForBattleId' or $key === 'heroId')
                continue;

            $arr = explode('_', $key);
            $skillId = $arr[1];
            $result[] = SkillFactory::getSkillByIdAndLevel($skillId, $value);
        }
        return $result;
    }

    public function increaseSkillLevel($skillId) {

    }

}
