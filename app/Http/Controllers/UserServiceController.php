<?php

namespace App\Http\Controllers;

use App\Models\UserService;
use Illuminate\Http\Request;

class UserServiceController extends Controller
{

    public function index()
    {

    }


    public function create()
    {
        return view('users.pages.orders.create');
    }


    public function store(Request $request)
    {

    }

    public function show(UserService $userService)
    {

    }


    public function edit(UserService $userService)
    {

    }


    public function update(Request $request, UserService $userService)
    {

    }


    public function destroy(UserService $userService)
    {

    }
}
