<?php

namespace Testable;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TestScenario extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'sequence',
        'input',
        'expected',
        'output',
        'status',
        'attachment',
    ];

    public function test ()
    {
        return $this->belongsTo(Test::class);
    }
}
