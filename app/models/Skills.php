<?php
use Phalcon\Mvc\Model\Resultset\Simple as Resultset;
class Skills extends Phalcon\Mvc\Model
{
    public function getSkillsByHeroId($heroId)
    {
        $sql = "
                SELECT sk.name, sk.description
                from heroes h
                inner join heroesSkills hs
                on hs.heroId = h.heroId
                inner join skills sk
                on sk.skillId = hs.skillId
                where h.heroId=$heroId
                ";

        $c = $this->getReadConnection();
        var_dump($c); die;
        $p = new Phalcon\Db\Profiler();
        $c->setProfiler($p);
        $r = $c->query($sql);
        $profile = $p->getLastProfile();

        echo "SQL Statement: ", $profile->getSQLStatement(), "\n";
        echo "Start Time: ", $profile->getInitialTime(), "\n";
        echo "Final Time: ", $profile->getFinalTime(), "\n";
        echo "Total Elapsed Time: ", $profile->getTotalElapsedSeconds(), "\n";

        return (new Resultset (null, $this, $r))->toArray();

    }
}
