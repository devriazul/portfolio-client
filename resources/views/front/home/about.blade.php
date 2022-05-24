@extends('layouts.home-app.app')
@section('title', 'About')
@section('content');
<section class="about" id="about">
    <h1 class="heading"> <span>about</span> me </h1>
    <div class="row">

        <div class="info">
            <h3> <span> Name : </span> {{$user->name}} </h3>
            <h3> <span> age : </span> {{$about->age}} </h3>
            <h3> <span> qualification : </span> {{$about->qualification}} </h3>
            <h3> <span> post : </span> {{$about->post}} </h3>
            <h3> <span> language : </span> {{$about->language1}}, {{$about->language2}} </h3>
            {{-- <a href="#"><button class="btn"> download CV <i class="fas fa-download"></i> </button></a> --}}
        </div>

        <div class="counter">
            @foreach($experiences as $experience)
            <div class="box">
                <span>{{$experience->number}}</span>
                <h3>{{$experience->title}}</h3>
            </div>
            @endforeach

        </div>

    </div>
</section>
@endsection
