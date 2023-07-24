@extends('layouts.guest')
@section('content')
    <section>
        @foreach ($exam as $ex)
            {{-- {{$ex->id}} --}}
            <div class="col-md-4 card m-auto">
                @foreach ($questions as $que)

                <div class="jumbotron question">

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

    </section>
@endsection
