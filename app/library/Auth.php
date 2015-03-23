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
            'id' => $user->getUserId(),
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
        $auth['heroId'] = $hero->getHeroId();
        $auth['heroName'] = $hero->getName();
        $loc = Locations::findFirst('locationId='.$hero->getLocationid());
        $auth['locationId'] = $hero->getLocationid();
        $auth['locationName'] = $loc->getName();

        $this->session->set('auth-identity', $auth);
    }

    public function getHeroId() {
        return $this->session->get('auth-identity')['heroId'];
    }

    public function getHeroName() {
        return $this->session->get('auth-identity')['heroName'];
    }

    public function getLocationId() {
        return $this->session->get('auth-identity')['locationId'];
    }


    public function remove() {
        $this->session->remove('auth-identity');
    }

    public function authUserById($id) {
        $user = Users::findFirstByUserId($id);

        if ($user == false) {
            return false;
        }
        $this->session->set('auth-identity', array(
            'id' => $user->getUserId(),
            'name' => $user->getEmail()
        ));
        return true;
    }


    public function getUser() {
        $identity = $this->session->get('auth-identity');
        if (isset($identity['id'])) {
            $user = Users::findFirstByUserId($identity['id']);
            if ($user == false) {
                return false;
            }
            return $user;
        }
        return false;
    }
}