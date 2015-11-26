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

        $locations = Session::all()->sortBy('location');

        for($i = 0; $i < count($locations); $i++) {
            if($i == 0) {
                $this->locationsBuilder .= "'" . $locations[$i]['location'] . "'";
            } else {
                $this->locationsBuilder .= ", '" . $locations[$i]['location'] . "'";
            }
        }

        foreach($this->sessions as &$session) {
            $session['end_time'] = gmdate("Y-m-d H:i:s", strtotime($session['start_time']) + ($session['duration'] * 60));
        }
    }
}
