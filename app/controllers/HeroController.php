<?php
use Phalcon\Mvc\Model\Resultset\Simple as Resultset;
class HeroController extends ControllerBase {

    public function chooseHeroAction() {
        $auth = Auth::getInstance()->getIdentity();
        $this->view->heroes = Heroes::find("userId=".$auth['id']);
    }

    public function addHeroAction() {
        $hero = new Heroes();
        //var_dump()
        $this->view->races = $this->gameConfig->races->toArray();
        //var_dump()
        $this->view->classes = $this->gameConfig->classes->toArray();
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

    public function profileAction($heroId = null)
    {
        $heroId = (is_null($heroId))?Auth::getInstance()->getHeroId(): $heroId;

        $hero = Heroes::findFirst("heroId=$heroId");
        $this->view->setVar("hero", $hero);


        //$skillsModel = new Skills();
        //$skills= $skillsModel->getSkillsByHeroId($heroId);


        //$this->view->setVar("skills", $skills);

        //Get the generated profiles from the profiler
        /*$profiles = $this->di->get('profiler')->getProfiles();


        foreach ($profiles as $profile) {
            echo "SQL Statement: ", $profile->getSQLStatement(), "<br />";
            echo "Start Time: ", $profile->getInitialTime(), "<br />";
            echo "Final Time: ", $profile->getFinalTime(), "<br />";
            echo "Total Elapsed Time: ", $profile->getTotalElapsedSeconds(), "<br />";
        }

        die;*/
    }

    public function skillsAction($heroId = null)
    {
        if ($heroId == null)
            $heroId = Auth::getInstance()->getHeroId();

        $heroName = Auth::getInstance()->getHeroName();//Heroes::findFirst("heroId = '$heroId'");
        $this->view->setVar("heroName", $heroName);
        $hero = Heroes::findFirst("heroId=".$heroId);

        var_dump($hero->skills->toArray());die;

    }

}

