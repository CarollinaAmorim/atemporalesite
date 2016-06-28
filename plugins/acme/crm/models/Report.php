<?php namespace Acme\Crm\Models;

use Model;

/**
 * Note Model
 */
class Report extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'acme_crm_reports';

    /**
     * @var array Guarded fields
     */
    protected $guarded = [];

    /**
     * @var array Relations
     */
    public $belongsTo = [
        'opportunity' => ['Acme\Crm\Models\Opportunity'],
    ];

}