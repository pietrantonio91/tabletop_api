<?php

namespace App\Http\Controllers;

use App\Models\Issue;

class IssueController extends Controller
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
            ->json(Issue::with('patterns')->get());
    }

    public function single(int $issueId)
    {
        return response()
            ->json(Issue::with('patterns')->find($issueId));
    }
}
