<?php

class AuthorizationController extends ControllerBase {

    public function indexAction() {}

    public function loginAction() {
        if ($this->request->isPost()) {
            $credentials = [
                'email'    => $this->request->getPost('email'),
                'password' => $this->request->getPost('password')
            ];
            if (Auth::getInstance()->login($credentials)) {
                return $this->response->redirect('hero/chooseHero');
            }
        }
        return $this->response->redirect('authorization');
    }

    public function logoutAction(){
        Auth::getInstance()->remove();
        return $this->response->redirect('index');
    }

}

