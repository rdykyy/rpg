<?php

use Phalcon\Mvc\Model\MetaData,
    Phalcon\Db\Column;

class BattleCreeps extends \Phalcon\Mvc\Model {

    /**
     * @var integer
     */
    protected $battleId;

    /**
     * @var integer
     */
    protected $creepId;

    /**
     * @var string
     */
    protected $currentHp;

    /**
     *
     * @var string
     */
    protected $currentMp;


    public function setBattleId($battleId) {
        $this->battleId = $battleId;
        return $this;
    }

    public function setCreepId($creepId) {
        $this->creepId = $creepId;
        return $this;
    }

    public function setCurrentHp($hp) {
        $this->currentHp = $hp;
        return $this;
    }

    public function setCurrentMp($mp) {
        $this->currentMp = $mp;
        return $this;
    }

    public function getBattleId() {
        return $this->battleId;
    }

    public function getCreepId() {
        return $this->creepId;
    }

    public function getCurrentHp() {
        return $this->currentHp;
    }

    public function getCurrentMp() {
        return $this->currentMp;
    }

    /**
     * Initialize method for model.
     */
    public function initialize() {
        $this->setSource('battleCreeps');
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap() {
        return [
            'battleId' => 'battleId',
            'creepId' => 'creepId',
            'currentHp' => 'currentHp',
            'currentMp' => 'currentMp'
        ];
    }

    public function metaData() {
        return [

            //Every column in the mapped table
            MetaData::MODELS_ATTRIBUTES => [
                'battleId', 'creepId', 'currentHp', 'currentMp'
            ],

            //Every column part of the primary key
            MetaData::MODELS_PRIMARY_KEY => [],

            //Every column that isn't part of the primary key
            MetaData::MODELS_NON_PRIMARY_KEY => [
                'battleId', 'creepId', 'currentHp', 'currentMp'
            ],

            //The identity column, use boolean false if the model doesn't have an identity column
            MetaData::MODELS_IDENTITY_COLUMN => 'battleId',

            //Every column that doesn't allows null values
            MetaData::MODELS_NOT_NULL => [
                'battleId', 'creepId', 'currentHp', 'currentMp'
            ],

            //Every column and their data types
            MetaData::MODELS_DATA_TYPES => [
                'battleId' => Column::TYPE_INTEGER,
                'creepId' => Column::TYPE_INTEGER,
                'currentHp' => Column::TYPE_INTEGER,
                'currentMp' => Column::TYPE_INTEGER
            ],

            //The columns that have numeric data types
            MetaData::MODELS_DATA_TYPES_NUMERIC => [
                'battleId' => true,
                'creepId' => true,
                'currentHp' => true,
                'currentMp' => true,
            ],

            //How every column must be bound/casted
            MetaData::MODELS_DATA_TYPES_BIND => [
                'battleId'   => Column::BIND_PARAM_INT,
                'creepId' => Column::BIND_PARAM_INT,
                'currentHp' => Column::BIND_PARAM_INT,
                'currentMp' => Column::BIND_PARAM_INT
            ],

            //Fields that must be ignored from INSERT SQL statements
            MetaData::MODELS_AUTOMATIC_DEFAULT_INSERT => [],

            //Fields that must be ignored from UPDATE SQL statements
            MetaData::MODELS_AUTOMATIC_DEFAULT_UPDATE => []

        ];
    }
}
