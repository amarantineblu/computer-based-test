<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Option;
use App\Models\Question;
use Illuminate\Http\Request;
use Session;

class ExamController extends Controller
{
    function exam_view() {
        $exam = Exam::all();
        return view('exam', with([
            'exam' => $exam]));
    }

    function post_exam(Request $request) {
        $exam = new Exam();
        $exam->title = $request->title;
        $exam->description = $request->description;
        $exam->type_of_options = $request->type_of_options;
        $exam->no_of_options = $request->no_of_options;
        $exam->no_of_questions = $request->no_of_questions;
        $exam->save();

        Session::put('SuccessMessage', 'Exam Created Successfully');
        return redirect()->back();
    }

     function manage_question($id) {
         $exam = Exam::get('id')->first();
         $question = Question::where('exam_id', $id)->get();
             dd($question);
         return view('manage', with([
             'questions' => $question,
             'exam' => $exam
         ]));
     }

    function update_exam_page($id){
        $exam = Exam::where('id',$id)->first();
        return view('update_exam_page', with([
            'id' => $id,
            'exam' => $exam
        ]));
    }

    function update_exam(Request $request, $id) {
        $exam = Exam::where('id',$id)->first();
        $exam->title = $request->title;
        $exam->description = $request->description;
        $exam->type_of_options = $request->type_of_options;
        $exam->no_of_options = $request->no_of_options;
        $exam->no_of_questions = $request->no_of_questions;
        $exam->save();

        return redirect()->route('exam.view');
    }

    function delete_exam($id) {
        $exam = Exam::where('id', $id)->delete();
        $question_ids = Question::where('exam_id', $id)->pluck('id');
        $question = Question::where('exam_id', $id)->delete();
        Option::whereIn('question_id',$question_ids)->delete();
        // $question_id = $question;
        // dd($question_id);
        // $options = Option::where('question_id', $question_id)->delete();
        return redirect()->back();
    }
    //
}
