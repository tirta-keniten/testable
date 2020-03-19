<?php

namespace Testable;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Test extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'description'
    ];

    protected $table = 'projects';

    public function project ()
    {
        return $this->belongsTo(Project::class);
    }
}
