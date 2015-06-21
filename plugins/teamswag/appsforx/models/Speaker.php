<?php namespace Teamswag\Appsforx\Models;

use Model;

/**
 * Speaker Model
 */
class Speaker extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'teamswag_appsforx_speakers';

    /**
     * @var array Guarded fields
     */
    protected $guarded = [''];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $belongsTo = ['Session' => ["Teamswag\Appsforx\Models\Session"]];

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