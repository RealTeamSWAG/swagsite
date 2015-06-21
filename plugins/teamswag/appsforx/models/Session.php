<?php namespace Teamswag\Appsforx\Models;

use Model;

/**
 * session Model
 */
class Session extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'teamswag_appsforx_sessions';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasMany = ['Speaker' => ['Teamswag\Appsforx\Models\Speaker']];
    public $belongsTo = ['Event' => ['Teamswag\Appsforx\Models\Event']];

    public $rules = [
        'name' => 'required',
        'location' => 'required',
        'startTime' => 'required',
        'duration' => 'required|integer',
    ];

    public $customMessages = [
        'required' => 'The :attribute field is required'
    ];
}
