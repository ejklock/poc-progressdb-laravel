<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ems2CadBaseModel extends Model
{
    public $connection = 'progress-ems2cad';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'it-codigo';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'string';
}
