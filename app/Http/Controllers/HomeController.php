<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ComicController;

class HomeController extends Controller
{
    public function index()
    {
        return redirect()->route('comics.index');
    }
}