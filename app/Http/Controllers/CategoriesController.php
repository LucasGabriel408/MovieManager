<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index() {
        // Return a view with a list of categories
        return view('categories.index');
    }

    public function list() {
        
    }

    public function create() {

    }

    public function store(Request $request) {
        // Validate and store the category
    }

    public function edit($id) {

    }

    public function delete($id) {

    }
}
