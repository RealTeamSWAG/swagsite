<?php namespace Teamswag\Appsforx\Components;

use Cms\Classes\ComponentBase;

class Events extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Events Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function all()
    {
        return Models\Events::all()->toArray();
    }
}
