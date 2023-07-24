@extends('layouts.admin')
@section('content')
    <div class="row">
        <form action="{{Route('post.practice')}}" class="col-md-5">
            @csrf
            <div class="card p-2">
                <h1> Practice Form </h1>
                <div class="first-option">
                    <label for=""> first option </label>
                <input type="text" class="form-control" name="options[]">
                </div>
                <div class="second-option">
                    <label for=""> second option </label>
                <input type="text" class="form-control" name="options[]">
                </div>
                <div class="third-option">
                    <label for=""> third option </label>
                <input type="text" class="form-control" name="options[]">
                </div>
                <button type="submit" class="btn btn-outline-success"> Submit </button>
            </div>
        </form>

        <div class="col-md-7">
            @php
            foreach ($practice as $opt) {
                json_decode($opt);
            }
            @endphp
            <ul>
                <li>
                    {{$opt}}
                </li>
            </ul>
        </div>
    </div>
@endsection
