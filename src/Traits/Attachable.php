<?php

namespace Testable\Traits;

use Testable\TestAttachment;

trait Attachable
{
    function attachments ()
    {
        return $this->morphMany(TestAttachment::class, 'attachable');
    }
}
