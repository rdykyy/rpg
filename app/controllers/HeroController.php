<?php

class HeroController extends ControllerBase {

    public function chooseHeroAction() {
        $auth = Auth::getInstance()->getIdentity();
        $this->view->heroes = Heroes::find("userId=".$auth['id']);
    }

    public function addHeroAction() {
        $this->view->races = Races::find();
        $this->view->classes = Classes::find();
    }

    public function createHeroAction() {
        if ($this->request->isPost()) {
            $auth = Auth::getInstance()->getIdentity();
            $model = new Heroes();
            $model->setClassId($this->request->getPost('heroClass'));
            $model->setRaceId($this->request->getPost('race'));
            $model->setName($this->request->getPost('name'));
            $model->setUserId($auth['id']);
            $model->setLevel(1);
            $model->setXp(0);
            if ($model->save()) {
                echo true;
                die;
            } else {
                foreach ($model->getMessages() as $message) {
                    echo $message, "\n";
                }
            }
        }
        echo false;die;
    }

    public function profileAction($heroId)
    {
        if ($heroId == null) {
            $auth = $this->session->get('auth-identity');
            $this->view->setVar("heroName", $auth['name']);
        }
    }

}

