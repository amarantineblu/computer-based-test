@extends('layouts.admin')
@section('content')
    <div class="col-md-5 m-auto card p-3">
       <form action="{{Route('edit.question')}}" method="POST">
        @csrf
        <div class="question">
            <label for="" style="">Question</label> <br>
            {{-- <input type="text" class="form-control" value="{{$question->question}}"> --}}
        <textarea id="" cols="40" class="form-control question"  name="question" rows="10"> {{$question->question}} </textarea> <br>
        <input type="hidden" value="{{$question->id}}" name="question_id">

        <div class="row">
            <div class="col-sm-12">
                <ol class="">
                    @foreach ($options as $opt)
                    <li>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                @if ($opt->is_answer == 1)
                                <span class="input-group-text">
                                    <input type="radio" name="answer" onclick="$('.question-answers').val(0);
                                    $(this).next('.question-answers').val(1)"
                                     class="" value="0" checked="checked">
                                     <input type="hidden" value="{{$opt->is_answer}}" class="question-answers form-control" name="answers[]">
                                </span>

                                @else
                                <span class="input-group-text">
                                    <input type="radio" name="answer" onclick="$('.question-answers').val(0);
                                    $(this).next('.question-answers').val(1)"
                                     class="" value="0">
                                     <input type="hidden" value="0" class="question-answers form-control" name="answers[]">
                                </span>
                                @endif
                            </div>
                            <input type="text" class="form-control option" name="options[]" value="{{$opt->options}}">
                        </div>
                    </li>
                    @endforeach
                </ol>
                <div class="input-groups">

                </div>
            </div>
        </div>
        <label for=""> Correct Option </label>
        <select id="" class="form-control" name="correct_option">
        <option value="" readonly> Select an Option </option>
        <option value="A"> A </option>
        <option value="B"> B </option>
        <option value="C"> C </option>
        <option value="D"> D </option>

        </select>
        </div>
        <button class="btn btn-success" type="submit"> Make Changes </button>
       </form>
    </div>
@endsection
