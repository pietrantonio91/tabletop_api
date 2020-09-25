<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
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
            ->json(Category::with('patterns')->get());
    }

    public function single(int $categoryId)
    {
        return response()
            ->json(Category::with('patterns')->find($categoryId));
    }
}
