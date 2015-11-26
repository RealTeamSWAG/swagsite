<?php namespace Teamswag\Appsforx\Components;

use Cms\Classes\ComponentBase;
use Teamswag\Appsforx\Models\Session;

class Event extends ComponentBase
{
    public $event;

    public function componentDetails()
    {
        return [
            'name'        => 'Event Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }


    public function onRun()
    {
        $pid = $_GET["id"]; 
        $this->event = Session::where('id', $pid)->first()->load('speakers');
        $this->event['start'] = gmdate("H\hi", strtotime($this->event['start_time']));
        $this->event['end'] = gmdate("H\hi", strtotime($this->event['start_time']) + ($this->event['duration'] * 60));

        /*$this->sessions = Session::all()->toArray();
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
        }*/
    }
}