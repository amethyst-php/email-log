<?php

namespace Railken\LaraOre\EmailLog;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;
use Railken\Laravel\Manager\Contracts\EntityContract;

class EmailLog extends Model implements EntityContract
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
        'from',
        'to',
        'subject',
        'body',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'to'      => 'array',
        'cc'      => 'array',
        'bcc'     => 'array',
        'headers' => 'array',
    ];

    /**
     * Creates a new instance of the model.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = Config::get('ore.email-log.table');
        $this->fillable = array_merge($this->fillable, array_keys(Config::get('ore.email-log.attributes')));
    }
}
