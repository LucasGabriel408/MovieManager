<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function index()
    {
        $moviesController = new MoviesController();
        $movies = $moviesController->list();

        return view('manage.index', compact('movies'));

    }
}
