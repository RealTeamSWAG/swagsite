<?php namespace Teamswag\Appsforx\Models;

use Model;

/**
 * Event Model
 */
class Event extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'teamswag_appsforx_events';

    protected $dates = ['startDate, endDate'];

    /**
     * @var array Guarded fields
     */
    protected $guarded = [''];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['name', 'description'];

    /**
     * @var array Relations
     */
    public $hasMany = ['Session' => ['Teamswag\Appsforx\Models\Session']];

    public $rules = [
        'name' => 'required',
        'startDate' => 'required',
        'endDate' => 'required',
        'description' => 'required'
    ];

}