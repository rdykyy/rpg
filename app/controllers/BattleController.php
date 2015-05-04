<?php

class BattleController  extends ControllerBase {

    public function attackAction($attackableItemId) {
        $attackableItem = AttackableLocationItems::findFirst('locationItemId=' . $attackableItemId);
        if (empty($attackableItem) || Auth::getInstance()->getLocationId() !== $attackableItem->getLocationid()) {
            $this->response->redirect('map/location/' . Auth::getInstance()->getLocationId());
        }

        $locationItems = new AttackableLocationItems();
        $creeps = $locationItems->getCreepsByLocationItemId($attackableItem->getLocationid());

        $creepsQueue = [];

        foreach($creeps as $creep) {
            $creepsQueue[] = $creep['creepId'];
        }

        shuffle($creepsQueue);

        $battle = new Battles();
        $battle
            ->setHeroId(Auth::getInstance()->getHeroId())
            ->setTeam1Queue(Auth::getInstance()->getHeroId())
            ->setTeam2Queue(implode(',',$creepsQueue))
            ->setIsTeam1Move(true);

        try {
        if ($battle->save()) {
            $battleId = $battle->getBattleId();
            foreach ($creeps as $creep) {
                $model = new BattleCreeps();
                $model
                    ->setBattleId($battleId)
                    ->setCreepId($creep['creepId'])
                    ->setCurrentHp($creep['maxHp'])
                    ->setCurrentMp($creep['maxMp']);
                $model->save();
            }

            $this->session->set('battleId', $battleId);

            $this->response->redirect('battle/fight/' . $battleId);

        } else {
            foreach ($battle->getMessages() as $message) {
                echo $message, "\n";
            }
        }
        }  catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }

    public function fightAction($id) {
        $battle = Battles::findFirst('battleId='.$id);
        //var_dump($id);die;

    }

}