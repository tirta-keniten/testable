<?php

namespace Testable;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Test extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'project_id',
        'title',
        'code',
        'tester',
        'date_time',
        'initial_location',
        'prerequiresite',
        'status',
        'comment',
    ];

    public function project ()
    {
        return $this->belongsTo(Project::class);
    }

    public function scenarios ()
    {
        return $this->hasMany(TestScenario::class);
    }
}
