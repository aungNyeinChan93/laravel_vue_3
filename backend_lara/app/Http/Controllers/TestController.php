<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //test-1
    public function one()
    {
        $tests = Test::query()->get();
        return view('test.one', compact('tests'));
    }
}
