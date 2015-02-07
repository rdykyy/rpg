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
            if ($model->save()) {
                echo true;
                die;
            }
        }
        echo false;die;
    }

}

