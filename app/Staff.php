<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Staff extends Model
{

    use Sortable;

    protected $fillable = [
        'username',
        'department',
        'dob',
        'age',
        'image'
    ];

    public $sortable = [
        'id',
        'created_at',
        'updated_at',
        'username',
        'department',
        'dob',
        'age',
        'image'

    ];
}
