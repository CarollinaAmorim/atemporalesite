<?php namespace Acme\Crm\Models;

use Model;

/**
 * Offering Model
 */
class File extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'acme_crm_files';

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

    public function getExtentionOptions($keyValue = null)
    {
        return [
            'jpg' => 'jpg',
            'pnj' => 'pnj',
            'gif' => 'gif',
            'pdf' => 'pdf',
            'zip' => 'zip',
            'rar' => 'rar'
        ];
    }

}