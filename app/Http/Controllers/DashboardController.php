<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Option;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user()->id;
        $exams = Exam::latest()->get();
        foreach ($exams as $exam) {
            $exam_id = $exam->pluck('id');
            $questions = Question::where('exam_id',$exam_id)->get();
            foreach (Question::all() as $question) {
                $question_id = $question->pluck('id');
                $option = Option::where('question_id', $question_id)->get();
                # code...
            }
        }
        // dd($question_id);

        return view('user.all-test', with([
            'user' => $user,
            'exams' => $exams,
            'exam_id' => $exam_id,
            'questions' => $questions,
            'question_id' => $question_id,
            'option' => $option
        ]));
    }
    //
}
