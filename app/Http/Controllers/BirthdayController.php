<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Resources\ContactResource;
use Illuminate\Http\Request;


class BirthdayController extends Controller
{
    public function index()
    {
        return ContactResource::collection(request()->user()->contacts()->birthday()->get());
    }
}
