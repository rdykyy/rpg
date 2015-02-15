<?php

class RegistrationController extends ControllerBase {

    public function indexAction() {
        //var_dump(Auth::getInstance()->getIdentity());die;
    }

    public function createAction() {
        if ($this->request->isPost()) {
            $model = new Users();
            $model->setEmail($this->request->getPost('email'));
            $model->setPasswordHash($this->request->getPost('password'));
            try {
                if ($model->save()) {
                    if (Auth::getInstance()->authUserById($model->getUserId())) {
                        return $this->response->redirect('hero/chooseHero');
                    }
                }
            } catch (Exception $e) {
                var_dump($e->getMessage());die;
                return $this->response->redirect('registration');
            }

        }
        return $this->response->redirect('registration');
    }

}

