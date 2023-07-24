<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Option;
use Session;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
  function index($id)
  {
    $exam = Exam::where('id',$id)->first();
    $question = Question::where('exam_id', $id)->paginate(20);
    $questionexam = $question->has('exam_id');
    // dd($questionexam);
    return view('questions_page', with([
        'questions' => $question,
        'exam_id' => $id,
        'exam' => $exam
    ]));
  }

  function post_question(Request $request)
  {
    // $request->validate([
    //   'question' => 'string|required',
    //   'correct_option' => 'string'
    // ]);
    $question = new Question();
    $question->question = $request->question;
    $question->correct_option = $request->correct_option;
    $question->exam_id = $request->exam_id;
    $question->save();

    $question_id = $question->id;
    $counter=0;
    foreach($request->options as $option){
        // if($request->answer[$counter] == 1){
        //     $is_answer = 1;
        // }else{
        //     $is_answer = 0;
        // }
        $newopt = new Option();
        $newopt->options = $option;
        $newopt->question_id = $question_id;
        $newopt->is_answer = $request->answers[$counter];
        $newopt->save();
        $counter++;
    }
    Session::put('successMessage','Question Inserted Successfully');
    return redirect()->back();
  }

  function edit_question_page(Request $r, Question $q) {
    $question = $q;
    // $question_id = $question->id;
    $options = Option::where('question_id',$question->id)->get();
    // $question_opt = $options->where('question_id',$question->id);
    // dd($question_id);
    return view('edit_questions_page',with(['options' => $options,'question'=> $question]));
  }



  function post_edited_question(Request $request) {
    // dd($request->question_id);
    $question_id = $request->question_id;
    $question = Question::where('id', $request->question_id)->first();
    // $question_id = $question->id;
    // dd($question);
    $question->question = $request->question;
    $question->exam_id = $request->exam_id;
    $question->correct_option = $request->correct_option;
    // $question->update();
    $question->save();

    // $question_id = $question->id;
    // dd($question_id);

    $question_id = $request->question_id;
    $counter=0;
    $newopt = Option::where('question_id',$question_id)->delete();
    foreach($request->options as $option){
        // if($request->answer[$counter] == 1){
        //     $is_answer = 1;
        // }else{
        //     $is_answer = 0;
        // }

        $newopt = new Option();
        $newopt->options = $option;
        $newopt->question_id = $question_id;
        $newopt->is_answer = $request->answers[$counter];
        $newopt->save();
        $counter++;
    }
    Session::put('successMessage','Question Edited Successfully');
    return redirect()->back();
  }

  function delete_question(Request $request) {
    $question_id = $request->question_id;
    $question = Question::where('id', $question_id)->delete();
    // $question->save();
    Session::put('successMessage','Question Deleted Successfully');
    return redirect()->back();
  }
  //
}
