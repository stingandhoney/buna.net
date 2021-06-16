<?php

namespace App\Http\Controllers\Document;

use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $me = Person::query()->find(1)->with('documents')->get();
//        $me = Document::query()->find(1)->with('jury')->with('category')->get();
        return response()->json($me);
    }
}
