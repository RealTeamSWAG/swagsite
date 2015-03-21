<?php namespace Teamswag\Appsforx;

use System\Classes\PluginBase;
use Backend;
use Controller;
use Event;

/**
 * Appsforx Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Appsforx',
            'description' => 'No description provided yet...',
            'author'      => 'Teamswag',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerPermissions()
    {
        return [
            'teamswag.appsforx.access_events' => ['tab' => 'Events', 'label' => 'teamswag.appsforx::lang.event.access_events'],
        ];
    }

    public function registerComponents()
    {
        return [
            'Teamswag\Appsforx\Components\Events'       => 'events',
        ];
    }

    public function boot()
    {
        /*Models\Event::extend(function ($model) {
            $model->hasMany['speakers'] = ['Teamswag\Appsforx\Models\Speakers'];
        });*/
    }

    public function registerNavigation()
    {
        return [
            'appsforx' => [
                'label'       => 'Appsfor X',
                'url'         => Backend::url('teamswag/appsforx/events'),
                'icon'        => 'icon-pencil',
                'permissions' => ['teamswag.appsforx.*'],
                'order'       => 500,

                'sideMenu' => [
                    'events' => [
                        'label'       => 'Events',
                        'icon'        => 'icon-copy',
                        'url'         => Backend::url('teamswag/appsforx/events'),
                        'permissions' => ['* ']
                    ],
                ]
            ]
        ];
    }
}
