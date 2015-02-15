<?php

use Phalcon\Mvc\Model\Validator\Email as Email;

class Users extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $userId;

    /**
     *
     * @var string
     */
    protected $email;

    /**
     *
     * @var string
     */
    protected $passwordHash;

    /**
     *
     * @var integer
     */
    protected $activeHeroId;

    public function initialize(){
        $this->hasMany("userId", "Heroes", "userId");
    }

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setUserId($id)
    {
        $this->userId = $id;

        return $this;
    }

    /**
     * Method to set the value of field email
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Method to set the value of field passwordHash
     *
     * @param string $passwordHash
     * @return $this
     */
    public function setPasswordhash($passwordHash)
    {
        $this->passwordHash = $this->getDI()
            ->getSecurity()
            ->hash($passwordHash);

        return $this;
    }

    /**
     * Method to set the value of field activeHeroId
     *
     * @param integer $activeHeroId
     * @return $this
     */
    public function setActiveheroid($activeHeroId)
    {
        $this->activeHeroId = $activeHeroId;

        return $this;
    }

    /**
     * Returns the value of field id
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Returns the value of field email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Returns the value of field passwordHash
     *
     * @return string
     */
    public function getPasswordhash()
    {
        return $this->passwordHash;
    }

    /**
     * Returns the value of field activeHeroId
     *
     * @return integer
     */
    public function getActiveheroid()
    {
        return $this->activeHeroId;
    }

    /**
     * Validations and business logic
     */
    public function validation()
    {

        $this->validate(
            new Email(
                array(
                    'field'    => 'email',
                    'required' => true,
                )
            )
        );
        if ($this->validationHasFailed() == true) {
            return false;
        }
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'userId' => 'userId',
            'email' => 'email', 
            'passwordHash' => 'passwordHash', 
            'activeHeroId' => 'activeHeroId'
        );
    }

}
