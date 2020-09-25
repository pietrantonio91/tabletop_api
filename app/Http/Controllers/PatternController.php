<?php

namespace App\Http\Controllers;

use App\Models\Pattern;

class PatternController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function list()
    {
        return response()
            ->json(Pattern::with(['categories', 'dimensions', 'issues'])->get());
    }

    public function single(int $patternId)
    {
        return response()
            ->json(Pattern::with(['categories', 'dimensions', 'issues'])->find($patternId));
    }
}
