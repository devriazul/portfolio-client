@extends('layouts.home-app.app')
@section('title', 'My Sites')
@section('content')
<section class="portfolio" id="portfolio">
    <h1 class="heading"> my <span>portfolio</span> </h1>
    <div class="box-container">
        @foreach ($my_sites as $my_site)    
            <div class="box">
                <a href="{{$my_site->link}}"><img src="{{url($my_site->image1)}}" alt="" srcset=""></a>
            </div>
        @endforeach
    </div>
</section>
@endsection