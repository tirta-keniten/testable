<?php

namespace Testable\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Testable\Http\Requests\ProjectRequest;

class TestableController extends Controller
{
    public function __invoke (Request $request)
    {
        return view('testable::index');
    }
}
