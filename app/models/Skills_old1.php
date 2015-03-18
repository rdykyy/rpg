<?php
use Phalcon\Mvc\Model\Resultset\Simple as Resultset;
class Skills_old extends Phalcon\Mvc\Model
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

        return (new Resultset (null, $this, $this->getReadConnection()->query($sql)))->toArray();
    }
}
