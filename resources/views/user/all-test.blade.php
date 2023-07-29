@extends('layouts.guest')
@section('content')
    <section>
       <form action="" class="card">
        @foreach ($exams as $ex)
        <div class="col-md-4 my-2 card m-auto">
            <h1 class="text-center"> {{$ex->title}} </h1>

            @foreach ($questions as $que)

            <div class="jumbotron question">
                <input type="" class="form-control" value="{{$ex->id}}">
                <input type="" class="form-control" value="{{$user}}">
                <input type="" class="form-control" value="{{$que->id}}">
                {{$que->question}}
            </div>
            <div class="options">
                <ol>
                   @foreach ($option as $opt)
                   <li>
                    <div class="input-group">
                        <div class="input-group-prepend">

                            <span class="input-group-text">
                                <input type="radio" name="answer" onclick="$('.question-answers').val(0);
                                $(this).next('.question-answers').val(1)"
                                 class="" value="0">
                                 <input type="hidden" value="0" class="question-answers form-control" name="answers[]">
                            </span>
                        </div>
                        <input type="text" class="form-control option" name="options[]" value="{{$opt->options}}">
                    </div>
                </li>
                   @endforeach
                </ol>
            </div>
            @endforeach
        </div>
    @endforeach
       </form>

    </section>
@endsection
