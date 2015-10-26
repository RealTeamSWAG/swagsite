<?php namespace Teamswag\Appsforx\Components;

use Cms\Classes\ComponentBase;

class Sessions extends ComponentBase
{

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

}
