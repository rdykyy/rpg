<?php
/**
 * Created by PhpStorm.
 * User: Sofiyka
 * Date: 12.02.2015
 * Time: 19:31
 */

class MapController extends ControllerBase
{
    public function getLocationItems($locationId)
    {
        return LocationItems::find("locationId = {$locationId}");
    }

    public function getLocations($landId)
    {
        return locations::find("landId = {$landId}");
    }

    public function getLands($worldId)
    {
        return lands::find("worldId = {$worldId}");
    }


    public function indexAction()
    {
        $locations = $this->getLocations(1)->toArray();
        //var_dump($landId);die;
        $this->view->setVar("landName", lands::findFirst("landId=1")->getName());
        $this->view->setVar("locationsList", $locations);
    }

    public function  locationAction($locationId)
    {
        $heroes = Heroes::find("locationId=" . $locationId . " AND heroId!=" . Auth::getInstance()->getHeroId() . ' limit 0, 50');
        $this->view->heroes = $heroes;
        $this->view->setVar("locationName", locations::findFirst("locationId = {$locationId}")->getName());
        $locationItems = $this->getLocationItems($locationId)->toArray();
        $this->view->setVar("locationItemsList", $locationItems);
    }
}