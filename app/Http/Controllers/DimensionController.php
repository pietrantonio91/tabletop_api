<?php

namespace App\Http\Controllers;

use App\Models\Dimension;

class DimensionController extends Controller
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
            ->json(Dimension::with('patterns')->get());
    }

    public function single(int $dimensionId)
    {
        return response()
            ->json(Dimension::with('patterns')->find($dimensionId));
    }
}
