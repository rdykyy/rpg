<?php

class MapController extends ControllerBase
{

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
        $this->view->setVar("landName", lands::findFirst("landId=1")->getName());
        $this->view->setVar("locationsList", $locations);

        if ($this->session->has('way')) {
            $way = $this->session->get('way');
            if (time() > $way['endTime']) {
                $hero = Heroes::findFirst('heroId='. Auth::getInstance()->getHeroId());
                $hero->setLocationid($way['toLocation']['id']);

                $auth = $this->session->get('auth-identity');
                $auth['locationId'] = $way['toLocation']['id'];
                $this->session->set('auth-identity', $auth);

                $hero->save();
                $this->session->remove('way');
                return $this->response->redirect('map/location/' . $way['toLocation']['id']);
            } else {
                $this->view->setVar("timeToEnd", $way['endTime'] - time());
            }
        }
    }

    public function  locationAction($locationId)
    {
        $heroes = Heroes::find("locationId=" . $locationId . " AND heroId!=" . Auth::getInstance()->getHeroId() . ' limit 0, 50');
        $this->view->heroes = $heroes;
        $this->view->setVar("location", locations::findFirst("locationId = {$locationId}")->toArray());
        $this->view->setVar("isInCurrentLocation", $locationId == Auth::getInstance()->getLocationId());

        $locationItems = [
            'collectable' => CollectableLocationItems::find("locationId = {$locationId}")->toArray(),
            'attackable' => AttackableLocationItems::find("locationId = {$locationId}")->toArray(),
        ];

        $this->view->setVar("locationItemsList", $locationItems);
    }

    public function moveAction($locId) {
        if ($this->_checkMovePossibility($locId)) {
            $currentLocation = locations::findFirst("locationId=".Auth::getInstance()->getLocationId())->toArray();
            $destinationLocation = locations::findFirst("locationId=". $locId)->toArray();
            $distance = (int)sqrt(pow($currentLocation['x'] - $destinationLocation['x'], 2) + pow($currentLocation['y'] - $destinationLocation['y'], 2));
            $way = [
                'fromLocation' => [
                    'id' => $currentLocation['locationId'],
                    'name' => $currentLocation['name'],
                ],
                'toLocation' => [
                    'id' => $destinationLocation['locationId'],
                    'name' => $destinationLocation['name'],
                ],
                'endTime' => time() + $distance / 2
            ];
            $this->session->set('way', $way);

            return $this->response->redirect('map');
        }

        return $this->response->redirect('map/location/' . $locId);
    }

    private function _checkMovePossibility($locId) {
        if ((int) $locId != $locId) return false;

        if ($locId == Auth::getInstance()->getLocationId()) return false;

        return true;
    }
}