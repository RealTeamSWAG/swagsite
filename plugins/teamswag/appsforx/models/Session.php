<?php namespace Teamswag\Appsforx\Models;

use Model;

/**
 * session Model
 */
class Session extends Model
{

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
    public $hasOne = [];
    public $hasMany = ['Speaker' => ['Teamswag\Appsforx\Models\Speaker']];
    public $belongsTo = ['Event' => ['Teamswag\Appsforx\Models\Event']];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}
