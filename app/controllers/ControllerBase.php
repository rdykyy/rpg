<?php

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;

class ControllerBase extends Controller {

    public function beforeExecuteRoute(Dispatcher $dispatcher){
        return $this->acl->checkAccess(
            $dispatcher->getControllerName(), $dispatcher->getActionName()
        );
    }

    public function initialize() {
        if (Auth::getInstance()->isLoggedIn()) {
            $this->view->user = Auth::getInstance()->getIdentity();
        }
    }

}
