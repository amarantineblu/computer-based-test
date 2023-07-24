@extends('layouts.guest')
@section('content')
    <section>
        <div class="jumbotron">
            <div class=" mx-auto text-center text-white">
                <h1> Take a Test </h1>
            </div>
        </div>
        <div class="all-test text-center">
            <h3> Here is a List of all the Tests You are to Take </h3>
            <ol>
                @foreach ($exam as $e)
                <li> <h4> {{$e->title}} </h4> </li>
                @endforeach
            </ol>
            <a href="{{Route('all-test')}}"><button class="btn btn-outline-primary"> Start test </button></a>
        </div>
    </section>
@endsection
