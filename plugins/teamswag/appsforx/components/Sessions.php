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

        $this->locationsBuilder = "";

        for($i = 0; $i < count($this->sessions); $i++) {
            if($i == 0) {
                $this->locationsBuilder += "'" + $this->sessions[$i]['location'] + "'";
            } else {
                $this->locationsBuilder += ", '" + $this->sessions[$i]['location'] + "'";
            }
        }
    }
}
