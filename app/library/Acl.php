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
                'maps' => ['landMap', 'location'],
                'authorization' => ['logout'],
                'game' => ['startGame']

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
                $this->response->redirect('index/index');
                return false;

            }
        } else if (isset($auth['id']) and !isset($auth['heroId'])) {
            if (isset($conf['user'][$controller]) and in_array($action, $conf['user'][$controller])) {
                return true;
            }  else {
                $this->response->redirect('hero/chooseHero');
                return false;
            }
        } else {
            return true;
//            if (
//                ($controller == 'authorization' and $action == 'logout') or
//                !isset($conf['user'][$controller]) and !isset($conf['public'][$controller])
//            ) {
//                return true;
//            } else {
//                $this->response->redirect('game/index');
//                return false;
//            }
        }
    }

}