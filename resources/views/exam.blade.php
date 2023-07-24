@extends('layouts.admin')
@section('content')
<div class="row">

    <form action="{{Route('post.exam')}}" method="POST" class="col-md-5">
      @if (Session::has('successMessage'))
      <div class="alert alert-success">
          {{ Session::get('successMessage') }}
      </div>
      {{ Session::forget('successMessage') }}
      @endif
        @csrf
        @include('includes.exam_form')

        <button type="submit" class="btn btn-primary"> Submit </button>
    </form>
    <div class="col-md-7">

        <div class="all-exams">
            <table class="table table-stripped table-hover">
                <thead>
                    <tr>
                        <th> SN </th>
                        <th> Title </th>
                        <th> Description </th>
                        <th> ... </th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i = 1;
                    @endphp
                    @foreach ($exam as $e)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $e->title }}</td>
                        <td>{{$e->description}}</td>
                        <td>
                            <a href="{{Route('update_page.exam', $e->id)}}" class="btn btn-outline-success  btn-sm">
                                Edit </a>
                            <a href="{{Route('question.page',$e->id)}}" class="btn btn-outline-primary  btn-sm"> Manage
                            </a>
                            <a href="{{Route('delete.test', $e->id)}}" class="btn btn-outline-danger btn-sm"> Delete
                            </a>

                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
