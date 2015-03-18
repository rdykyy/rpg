<?php

class GameController extends ControllerBase {

    public function startGameAction() {
        if ($this->request->isPost()) {
            if (Auth::getInstance()->isLoggedIn()) {
                $heroId = $this->request->getPost('hero');
                if ($heroId) {
                    $auth = Auth::getInstance()->getIdentity();
                    $hero = Heroes::findFirst("userId=".$auth['id'] . " AND heroId=".$heroId);

                    if ($hero) {
                        if (!$hero->getLocationid()) {
                            $hero->setLocationid(1);
                            $hero->save();
                        }
                        Auth::getInstance()->addHero($hero);
                        $this->response->redirect('map/location/' . $hero->getLocationid());
                    }
                }
            }
        }
    }

}

