@extends('layouts.app')
@section('title', 'Show Education')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-5">
    <div class="card text-center">
        <div class="card-header">
            <p>#{{$education->id}}</p>
        </div>
        <div class="card-body">
            <h5 class="card-title">Exam Title: {{$education->exam_title}}</h5>
            <p class="card-text">Major: {{$education->major}}</p>
            <p class="card-text">Institute: {{$education->institute}}</p>
            <p class="card-text">Result: {{$education->result}}</p>
            <p class="card-text">Passing Year: {{$education->passing_year}}</p>
            <p class="card-text">Duration: {{$education->duration}}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        <div class="card-footer text-muted">
           {{$education->created_a}}
        </div>
        </div>
    </div>
</div>
@endsection