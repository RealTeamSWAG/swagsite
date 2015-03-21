<?php namespace Teamswag\Appsforx\Models;

use Model;

/**
 * Speaker Model
 */
class Speaker extends Model
{

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

    /*
     * Relations
     */
    public $belongsTo = [
        'Event' => ['Teamswag\Appsforx\Models\Event']
    ];
}
