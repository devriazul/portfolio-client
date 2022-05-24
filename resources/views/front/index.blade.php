@extends('layouts.home-app.app')
@section('title', 'Home')
@section('content');
<section class="home" id="home">

    <h3>HI THERE !</h3>
    <h1>I'M <span>{{$user->name}}</span></h1>
    <p>{{$description->description}}</p>
    <a href="{{route('about-page')}}"><button class="btn">about me <i class="fas fa-user"></i></button></a>

    </section>
    <!-- home section ends -->

    <!-- about section starts  -->
@endsection
