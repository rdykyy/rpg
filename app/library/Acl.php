<?php

use Phalcon\Mvc\User\Component;

class Acl extends Component {

    private function _getConfig() {
        return [
            'public' => [
                'index'         => ['index'],
                'registration'  => ['index', 'create'],
                'authorization' => ['index', 'login']
            ],
            'user' => [
                'hero' => ['chooseHero', 'addHero', 'createHero', 'startGame'],
                'maps' => ['landMap', 'location']

            ]
        ];
    }

    public function checkAccess($controller, $action) {
        $conf = $this->_getConfig();
        $auth = Auth::getInstance()->getIdentity();
        if (!$auth) {
            if (isset($conf['public'][$controller]) and in_array($action, $conf['public'][$controller])) {
                return true;
            } else {
                return $this->response->redirect('index/index');
            }
        } else if (isset($auth['id']) and !isset($auth['heroId'])) {
            if (isset($conf['user'][$controller]) and in_array($action, $conf['user'][$controller])) {
                return true;
            }  else {
                return $this->response->redirect('hero/chooseHero');
            }
        } else {
            if (!isset($conf['user'][$controller]) and !isset($conf['public'][$controller])) {
                return true;
            } else {
                return $this->response->redirect('game/index');
            }
        }
    }

}