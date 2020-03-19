<?php

namespace Testable;

use Illuminate\Database\Eloquent\Model;

class TestAttachment extends Model
{
    protected $fillable = [
        'caption',
        'location'
    ];
}
