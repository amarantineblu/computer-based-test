<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Option;
use App\Models\Question;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index() {
        $exam = Exam::latest()->get();
        // dd($exam);
        return view('user.dashboard', with([
            'exam' => $exam
        ]));
    }

    function allTest() {
        $exam = Exam::latest()->get();
        $exam_id = $exam->pluck('id');

        $questions = Question::where('exam_id',$exam_id)->get();
        $question_id = $questions->pluck('id');
        // dd($exam_id);

        $option = Option::where('question_id', $question_id);
        return view('user.all-test', with([
            'exam' => $exam,
            'exam_id' => $exam,
            'questions' => $questions,
            'question_id' => $question_id,
            'option' => $option
        ]));
    }
    //
}
