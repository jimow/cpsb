<?php

namespace App\Http\Controllers;
use App\Models\Vacancy;

use Illuminate\Http\Request;

class VacancyController extends Controller
{
    //

    public function index() {

        $vac = Vacancy::all();
        return view('vacancies.vacancies',compact('vac'));
    }
}
