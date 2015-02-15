<?php
/**
 * Created by PhpStorm.
 * User: Sofiyka
 * Date: 12.02.2015
 * Time: 19:31
 */

class MapsController extends ControllerBase
{
    public function getLocationItems($locationId)
    {
        return locationItems::find("locationId = {$locationId}");
    }

    public function getLocations($landId)
    {
        return locations::find("landId = {$landId}");
    }

    public function getLands($worldId)
    {
        return lands::find("worldId = {$worldId}");
    }

    /*public function landMapAction()
    {
        echo "hello";
    }*/

    public function landMapAction($landId = null)
    {

        if (is_null($landId))
        {
            $identity = $this->session->get("auth-identity");
            $landId = $identity["locationId"];
        }

        $this->session->destroy();
        $locations = $this->getLocations($landId)->toArray();
        $this->view->setVar("landName", lands::findFirst("landId = {$landId}")->getName());
        $this->view->setVar("locationsList", $locations);
    }

    public function  locationAction($locationId)
    {
        $this->view->setVar("locationName", locations::findFirst("locationId = {$locationId}")->getName());
        $locationItems = $this->getLocationItems($locationId)->toArray();
        $this->view->setVar("locationItemsList", $locationItems);
    }
}