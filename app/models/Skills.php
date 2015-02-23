<?php

use Phalcon\Mvc\Model\MetaData;

class Skills extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $skillId;

    /**
     *
     * @var string
     */
    protected $name;

    /**
     *
     * @var integer
     */
    protected $requiredLevel;

    /**
     *
     * @var integer
     */
    protected $requiredSkillId;

    /**
     *
     * @var string
     */
    protected $description;

    /**
     *
     * @var integer
     */
    protected $upgradeOfSkillId;

    /**
     * Method to set the value of field skillId
     *
     * @param integer $skillId
     * @return $this
     */
    public function setSkillid($skillId)
    {
        $this->skillId = $skillId;

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
     * Method to set the value of field requiredLevel
     *
     * @param integer $requiredLevel
     * @return $this
     */
    public function setRequiredlevel($requiredLevel)
    {
        $this->requiredLevel = $requiredLevel;

        return $this;
    }

    /**
     * Method to set the value of field requiredSkillId
     *
     * @param integer $requiredSkillId
     * @return $this
     */
    public function setRequiredskillid($requiredSkillId)
    {
        $this->requiredSkillId = $requiredSkillId;

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
     * Method to set the value of field upgradeOfSkillId
     *
     * @param integer $upgradeOfSkillId
     * @return $this
     */
    public function setUpgradeofskillid($upgradeOfSkillId)
    {
        $this->upgradeOfSkillId = $upgradeOfSkillId;

        return $this;
    }

    /**
     * Returns the value of field skillId
     *
     * @return integer
     */
    public function getSkillid()
    {
        return $this->skillId;
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
     * Returns the value of field requiredLevel
     *
     * @return integer
     */
    public function getRequiredlevel()
    {
        return $this->requiredLevel;
    }

    /**
     * Returns the value of field requiredSkillId
     *
     * @return integer
     */
    public function getRequiredskillid()
    {
        return $this->requiredSkillId;
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
     * Returns the value of field upgradeOfSkillId
     *
     * @return integer
     */
    public function getUpgradeofskillid()
    {
        return $this->upgradeOfSkillId;
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'skillId' => 'skillId',
            'name' => 'name',
            'requiredLevel' => 'requiredLevel',
            'requiredSkillId' => 'requiredSkillId',
            'description' => 'description',
            'upgradeOfSkillId' => 'upgradeOfSkillId'
        );
    }

    public function metaData()
    {
        return array(

            //Every column in the mapped table
            MetaData::MODELS_ATTRIBUTES => array(
                'skillId', 'name', 'requiredLevel', 'requiredSkillId', 'description'
            ),

            //Every column part of the primary key
            MetaData::MODELS_PRIMARY_KEY => array(
                'skillId'
            ),

            //Every column that isn't part of the primary key
            MetaData::MODELS_NON_PRIMARY_KEY => array(
                'name', 'requiredLevel', 'requiredSkillId', 'description'
            ),


            //The identity column, use boolean false if the model doesn't have
            //an identity column
            MetaData::MODELS_IDENTITY_COLUMN => 'skillId',

        );
    }

}
