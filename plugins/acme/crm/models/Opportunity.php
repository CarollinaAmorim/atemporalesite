<?php namespace Acme\Crm\Models;

use Model;

/**
 * Opportunity Model
 */
class Opportunity extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'acme_crm_opportunities';

    /**
     * @var array Guarded fields
     */
    protected $guarded = [];

    /**
     * @var array Relations
     */
    public $hasMany = [
        'notes' => ['Acme\Crm\Models\Note'],
        'collaborators' => ['Acme\Crm\Models\Collaborator'],
        'services' => ['Acme\Crm\Models\Service'],
        'costs' => ['Acme\Crm\Models\Cost'],
        'reports' => ['Acme\Crm\Models\Report'],
        'files' => ['Acme\Crm\Models\File'],
        'invoices' => ['Acme\Crm\Models\Invoice'],
        'contacts' => ['Acme\Crm\Models\Contact'],
    ];

    public $belongsTo = [
        'status' => ['Acme\Crm\Models\Status'],
    ];

    public $belongsToMany = [];

}