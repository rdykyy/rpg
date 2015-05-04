<?php

use Phalcon\Mvc\Model\MetaData,
    Phalcon\Db\Column;

class Battles extends \Phalcon\Mvc\Model {

    /**
     * @var integer
     */
    protected $battleId;

    /**
     * @var integer
     */
    protected $heroId;

    /**
     * @var string
     */
    protected $team1Queue;

    /**
     *
     * @var string
     */
    protected $team2Queue;

    /**
     * @var bool
     */
    protected $isTeam1Move;

    public function setBattleId($battleId) {
        $this->battleId = $battleId;
        return $this;
    }

    public function setHeroId($heroId) {
        $this->heroId = $heroId;
        return $this;
    }

    public function setTeam1Queue($queue) {
        $this->team1Queue = $queue;
        return $this;
    }

    public function setTeam2Queue($queue) {
        $this->team2Queue = $queue;
        return $this;
    }

    public function setIsTeam1Move($isTeam1Move) {
        $this->isTeam1Move = $isTeam1Move;
        return $this;
    }

    public function getBattleId() {
        return $this->battleId;
    }

    public function getHeroId() {
        return $this->heroId;
    }

    public function getTeam1Queue() {
        return $this->team1Queue;
    }

    public function getTeam2Queue() {
        return $this->team2Queue;
    }

    public function getIsTeam1Move() {
        return $this->isTeam1Move;
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap() {
        return [
            'battleId' => 'battleId',
            'heroId' => 'heroId',
            'team1Queue' => 'team1Queue',
            'team2Queue' => 'team2Queue',
            'isTeam1Move' => 'isTeam1Move'
        ];
    }

    public function metaData() {
        return [

            //Every column in the mapped table
            MetaData::MODELS_ATTRIBUTES => [
                'battleId', 'heroId', 'team1Queue', 'team2Queue', 'isTeam1Move'
            ],

            //Every column part of the primary key
            MetaData::MODELS_PRIMARY_KEY => [
                'battleId'
            ],

            //Every column that isn't part of the primary key
            MetaData::MODELS_NON_PRIMARY_KEY => [
                'heroId', 'team1Queue', 'team2Queue', 'isTeam1Move'
            ],

            //The identity column, use boolean false if the model doesn't have an identity column
            MetaData::MODELS_IDENTITY_COLUMN => 'battleId',

            //Every column that doesn't allows null values
            MetaData::MODELS_NOT_NULL => [
                'battleId', 'heroId', 'team1Queue', 'team2Queue'
            ],

            //Every column and their data types
            MetaData::MODELS_DATA_TYPES => [
                'battleId' => Column::TYPE_INTEGER,
                'heroId' => Column::TYPE_INTEGER,
                'team1Queue' => Column::TYPE_VARCHAR,
                'team2Queue' => Column::TYPE_VARCHAR,
                'isTeam1Move' => Column::TYPE_BOOLEAN
            ],

            //The columns that have numeric data types
            MetaData::MODELS_DATA_TYPES_NUMERIC => [
                'battleId' => true,
                'heroId' => true,
            ],

            //How every column must be bound/casted
            MetaData::MODELS_DATA_TYPES_BIND => [
                'battleId'   => Column::BIND_PARAM_INT,
                'heroId' => Column::BIND_PARAM_INT,
                'team1Queue' => Column::BIND_PARAM_STR,
                'team2Queue' => Column::BIND_PARAM_STR,
                'isTeam1Move' => Column::BIND_PARAM_BOOL
            ],

            //Fields that must be ignored from INSERT SQL statements
            MetaData::MODELS_AUTOMATIC_DEFAULT_INSERT => [],

            //Fields that must be ignored from UPDATE SQL statements
            MetaData::MODELS_AUTOMATIC_DEFAULT_UPDATE => []

        ];
    }
}
