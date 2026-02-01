<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserSaveRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function save(UserSaveRequest $request)
    {
        $validatedForm = $request->validated();

        dd($validatedForm);
    }
}
