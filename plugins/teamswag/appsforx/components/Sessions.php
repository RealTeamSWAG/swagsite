<?php namespace Teamswag\Appsforx\Components;

use Cms\Classes\ComponentBase;
use Teamswag\Appsforx\Models\Session;

class Sessions extends ComponentBase
{
    public $sessions;
    public $locationsBuilder;

    public function componentDetails()
    {
        return [
            'name'        => 'sessions Component',
            'description' => 'Component that lets you make sessions'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->sessions = Session::all()->toArray();
        $this->locationsBuilder;

        $locations = Session::orderBy('location')->get();
        $previousLocation = "";

        for($i = 0; $i < count($locations); $i++) {

            //Check if the previous location is the same as this one, if not add it to the locationBuilder
            if(strcmp($previousLocation, $locations[$i]['location']) !== 0) {
                if($i == 0) {
                    $this->locationsBuilder .= "'" . $locations[$i]['location'] . "'";
                } else {
                    $this->locationsBuilder .= ", '" . $locations[$i]['location'] . "'";
                }
            }

            $previousLocation = $locations[$i]['location'];
        }

        foreach($this->sessions as &$session) {
            $session['end_time'] = gmdate("F d, Y H:i:s", strtotime($session['start_time']) + ($session['duration'] * 60));
            $session['start_time'] = gmdate("F d, Y H:i:s", strtotime($session['start_time']));
        }
    }
}
