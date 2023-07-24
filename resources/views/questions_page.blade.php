@extends('layouts.admin')
@section('content')
		<div class="questions">
				<div class="row">
						<div class="col-md-4 card">
								<form action="{{ Route('post.question') }}" method="POST">
										@csrf
										@if (Session::has('successMessage'))
												<div class="alert alert-success">
														{{ Session::get('successMessage') }}
												</div>
												{{ Session::forget('successMessage') }}
										@endif
										@include('includes.question_form')
                                        <input type="hidden" name="exam_id" value="{{$exam_id}}" class="form-control" placeholder="exam_id">

										@if ($questions->total() !== $exam['no_of_questions'])
                                        <button class="btn btn-primary"> Submit </button>
                                        @endif
								</form>
						</div>
						<div class="col-md-8">
								<div class="all-questions">
										<table class="table table-stripped table-hover">
												<thead>
														<tr>
																<th> SN </th>
																<th> Question </th>
																<th> Options </th>
																<th> ... </th>
														</tr>
												</thead>
												<tbody>
														@php
																$i = 1;
														@endphp
														@foreach ($questions as $q)
																<tr>
																		<td>{{ $i++ }}</td>
																		<td>{{ $q->question }}</td>
																		<td></td>
																		<td>
																				<a href="{{ Route('edit_question.page',$q) }}" class="btn btn-success btn-sm"
																				> Edit </a>
                                        <a href="javascript:void(0)" class="btn btn-danger btn-sm"
																				onclick="deleteQuestion({{ $q }})"> Delete </a>

																		</td>
																</tr>
														@endforeach
												</tbody>
										</table>
								</div>
						</div>
				</div>
		</div>
@endsection
