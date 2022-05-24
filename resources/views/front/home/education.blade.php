@extends('layouts.home-app.app')
@section('title', 'Education')
@section('content')

<section class="education" id="education">

    <h1 class="heading"> my <span>education</span> </h1>

    <div class="box-container">
        @foreach($educations as $education)
        <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <span>{{$education->passing_year}}</span>
            <h3>{{$education->exam_title}}</h3>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quos alias praesentium. Id autem provident laborum quae, distinctio eaque temporibus!</p> -->
            <p>Institute : {{$education->institute}}</p>
            <p>Major : {{$education->major}}</p>
            <p>Result : {{$education->result}}</p>
            <p>Passing Year : {{$education->passing_year}}</p>
            <p>Duration : {{$education->duration}}</p>
        </div>
        @endforeach

    </div>

</section>
@endsection
