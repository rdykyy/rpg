<?php

class Heroesskills  extends Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $skillId;

    /**
     *
     * @var integer
     */
    protected $heroId;

    public function initialize() {
        $this->setSource("heroesSkills");
    }

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
     * Method to set the value of field heroId
     *
     * @param integer $heroId
     * @return $this
     */
    public function setHeroid($heroId)
    {
        $this->heroId = $heroId;

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
     * Returns the value of field heroId
     *
     * @return integer
     */
    public function getHeroid()
    {
        return $this->heroId;
    }

    /**
     * Initialize method for model.
     */
//    public function initialize()
//    {
//        $this->setSource('heroesSkills');
//    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'skillId' => 'skillId', 
            'heroId' => 'heroId'
        );
    }

}
