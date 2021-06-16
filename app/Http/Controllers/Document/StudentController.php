<?php

namespace App\Http\Controllers\Document;

use App\Http\Controllers\Controller;
use App\Models\Person\Diploma;
use App\Models\Person\Person;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(): Factory|View|Application
    {
       $students =  Person::query()->with('diplomas')->get();

        return view('student.index', compact('students'));
    }

    public function store(Request $request): RedirectResponse
    {
        $did = Diploma::query()->create([
            'name' => $request->get('diploma_name')
        ])->id;

        $student = Person::query()->create([
            'civility' => $request->get('civility'),
            'full_name' => $request->get('full_name'),
            'birth_date' => $request->get('birth_date'),
            'is_male' => $request->get('is_male'),
        ]);

        $student->diplomas()->attach($did);
        return back();
    }
}
