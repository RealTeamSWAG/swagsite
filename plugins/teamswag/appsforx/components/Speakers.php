<?php namespace Teamswag\Appsforx\Components;

use Cms\Classes\ComponentBase;
<<<<<<< HEAD
use Teamswag\Appsforx\Models\Speaker;
=======
use Teamswag\Appsforx\Models\Speaker as Speaker;
>>>>>>> e185e8cf7d76cfa95bacee48dbad8b95a10baad9

class Speakers extends ComponentBase
{
    public $speakers;
<<<<<<< HEAD
    
=======

>>>>>>> e185e8cf7d76cfa95bacee48dbad8b95a10baad9
    public function componentDetails()
    {
        return [
            'name'        => 'Speakers Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

<<<<<<< HEAD
    public function onRun()
    {
        $this->speakers = Speaker::orderBy('priority', 'ASC')->get();
    }
   
=======
    public function onRun() {
        $this->speakers = Speaker::all()->toArray();
    }
>>>>>>> e185e8cf7d76cfa95bacee48dbad8b95a10baad9
}