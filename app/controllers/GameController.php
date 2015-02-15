<?php

class GameController extends ControllerBase {

    public function startGameAction() {
        if ($this->request->isPost()) {
            if (Auth::getInstance()->isLoggedIn()) {
                $heroId = $this->request->getPost('hero');
                if ($heroId) {
                    $auth = Auth::getInstance()->getIdentity();
                    $hero = Heroes::findFirst([
                        'userId' => $auth['id'],
                        'id' => $heroId
                    ]);
                    if ($hero) {
                        Auth::getInstance()->addHero($hero);
                        if (!$hero->getLocationid()) {
                            $hero->setLocationid(1);
                            $hero->save();
                        }
                        $this->response->redirect('maps/landMap/' . $hero->getLocationid());
                    }
                }
            }
        }
    }

}

