<?php

use Phalcon\Mvc\User\Component;

class Auth extends Component {

    public static $instance = null;

    public static function getInstance() {
        if (is_null(self::$instance)) {
            self::$instance = new Auth();
        }
        return self::$instance;
    }

    public function login($credentials) {
        // Check if the user exist
        $user = Users::findFirstByEmail($credentials['email']);
        if ($user == false) {
            return false;
        }

        // Check the password
        if (!$this->security->checkHash($credentials['password'], $user->getPasswordHash())) {
            return false;
        }

        $this->session->set('auth-identity', array(
            'id' => $user->getId(),
            'name' => $user->getEmail()
        ));
        return true;
    }


    public function getIdentity() {
        return $this->session->get('auth-identity');
    }

    public function isLoggedIn() {
        $auth = $this->session->get('auth-identity');
        return isset($auth['id']);
    }

    public function hasSelectedHero() {
        $auth = $this->session->get('auth-identity');
        return isset($auth['heroId']);
    }

    /**
     * @param Heroes $hero
     */
    public function addHero($hero) {
        $auth = $this->session->get('auth-identity');
        $auth['heroId'] = $hero->getId();
        $this->session->set('auth-identity', $auth);
    }


    public function remove() {
        $this->session->remove('auth-identity');
    }

    public function authUserById($id) {
        $user = Users::findFirstById($id);

        if ($user == false) {
            return false;
        }
        $this->session->set('auth-identity', array(
            'id' => $user->getId(),
            'name' => $user->getEmail()
        ));
        return true;
    }


    public function getUser() {
        $identity = $this->session->get('auth-identity');
        if (isset($identity['id'])) {
            $user = Users::findFirstById($identity['id']);
            if ($user == false) {
                return false;
            }
            return $user;
        }
        return false;
    }
}