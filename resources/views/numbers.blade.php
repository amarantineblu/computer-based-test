@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="card col-md-5">
            <form action="{{route('verifyNumber')}}" method="POST">
                @csrf
                <label for=""> Even Numbers </label>
                <input class="form-control" name="even_number" type="numbers">
                <label for=""> Prime Numbers </label>
                <input class="form-control" name="prime_number" type="numbers">
                <label for=""> Odd Numbers </label>
                <input class="form-control" name="odd_number" type="numbers">
                <button class="btn btn-primary"> Submit </button>
            </form>
        </div>
        <div class="col-md-7">
            <div class="card">
                @if (Session::has('evenMessage'))
                    {{Session::get('evenMessage')}}
                    {{Session::forget('evenMessage')}}
                @endif
            </div>
        </div>
    </div>
@endsection
