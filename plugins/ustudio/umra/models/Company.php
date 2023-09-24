<?php namespace Ustudio\Umra\Models;

use Model;

/**
 * Model
 */
class Company extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;

    /**
     * @var array dates to cast from the database.
     */
    protected $dates = ['deleted_at'];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'ustudio_umra_company';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];
    
    // Relations
    public $attachOne = [
        'poster' => 'System\Models\File'
    ];

}
