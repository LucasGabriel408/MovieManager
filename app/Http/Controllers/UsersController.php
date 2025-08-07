<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller {
    public function index() {
        return view('users.index');
    }

    // public function show($id)
    //  {
    //     return view('users.show', ['id' => $id]);
    // }

    public function create() {
        return view('users.create');
    }

    public function store(Request $request) {
        // Logic to store user data
        return redirect()->route('users.index');
    }

    public function edit($id) {
        return view('users.edit', ['id' => $id]);
    }

    public function update(Request $request, $id) {
        // Logic to update user data
        return redirect()->route('users.show', ['id' => $id]);
    }


}
