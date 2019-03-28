<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LogRegister;

class LogRegisterController extends Controller
{
    public function store(CreateLogRequest $request) {
        return LogRegister::create($request->all(),201);
    }
}
