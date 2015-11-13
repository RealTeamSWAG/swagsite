<?php namespace Teamswag\Appsforx\Components;

use Cms\Classes\ComponentBase;
use Teamswag\Appsforx\Models\Session;

class Sessions extends ComponentBase
{
    public $sessions;

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

        $locationsBuilder = "";

        for($i = 0; $i < $sessions.count(); $i++) {
            $locationsBuilder += "," + $sessions[i]->location;
        }
    }
}
