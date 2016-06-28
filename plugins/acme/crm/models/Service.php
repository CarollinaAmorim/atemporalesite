<?php namespace Acme\Crm\Models;

use Model;

/**
 * Contact Model
 */
class Service extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'acme_crm_services';

    /**
     * @var array Guarded fields
     */
    protected $guarded = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
        'opportunity' => ['Acme\Crm\Models\Opportunity'],
        'service' => ['Acme\Catalog\Models\Service'],
        'owner' => ['Backend\Models\User'],
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    public function getStatusOptions($keyValue = null)
    {
        return [
            'Inizio' => 'Inizio',
            'Briefing' => 'Briefing',
            'Analisi di mercato' => 'Analisi di mercato',
            'Definizione degli obiettivi' => 'Definizione degli obiettivi',
            'Concettualizzazione' => 'Concettualizzazione',
            'Metaprogettazione' => 'Metaprogettazione',
            'Sviluppo del progetto' => 'Sviluppo del progetto',
            'Testing' => 'Testing',
            'Realizzazione di esecutivi' => 'Realizzazione di esecutivi',
            'Consegna' =>'Consegna',
        ];
    }

}