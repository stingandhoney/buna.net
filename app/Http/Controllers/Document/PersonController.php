<?php

namespace App\Http\Controllers\Document;

use App\Http\Controllers\Controller;
use App\Http\Resources\StudentResource;
use App\Models\Document;
use App\Models\Person;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PersonController extends Controller
{
    public function index()
    {
        $me = Person::query()->find(1)->with('documents')->get();
//        $me = Document::query()->find(1)->with('jury')->with('category')->get();
        return response()->json($me);
    }

    public function getPeople(): JsonResponse
    {
        $people = new StudentResource(Person\Person::all());
        return response()->json($people);
    }
}
