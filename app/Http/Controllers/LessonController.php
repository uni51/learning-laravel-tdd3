<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\VacancyLevel;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function show(Lesson $lesson)
    {
        return view('lesson.show', compact('lesson'));
    }
}
