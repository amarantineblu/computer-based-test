@extends('layouts.admin')
@section('content')
   <form action="{{Route('update.exam',$exam->id)}}" method="POST" class="col-md-5 mx-auto" >
    @csrf
    <div class="exam">
        <label for="" style=""><h1>Exam</h1></label> <br>

        <div class="row">
            <div class="col-sm-12">
                <label for=""> Title </label>
                <input type="text" class="form-control" value="{{$exam->title}}" name="title" placeholder="title">
                <label for=""> Description </label>
                <textarea class="form-control"  name="description" id="" cols="30" rows="10">{{$exam->description}}</textarea>
                <label for=""> Type of Options </label>

                <input type="text" placeholder="type of options" class="form-control" value="{{$exam->type_of_options}}" name="type_of_option">
                <label for=""> No of Options </label>

                <input type="number" placeholder="no of options" class="form-control" value="{{$exam->no_of_options}}" name="no_of_options">
                <label for=""> No of Questions </label>

                <input type="number" class="form-control" value="{{$exam->no_of_questions}}" placeholder="no_of_questions" name="no_of_questions">
            </div>
        </div>
        </div>
        <button class="btn btn-success" type="submit"> Submit </button>
   </form>
@endsection
