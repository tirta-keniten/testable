<?php

namespace Testable;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'description'
    ];

    protected $table = 'projects';
}
