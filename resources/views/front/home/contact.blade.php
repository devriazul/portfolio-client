
@extends('layouts.home-app.app')
@section('title', 'Contact')
@section('content')
<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> me </h1>
    {{-- Any Error --}}
    @if ($errors->any())
       <div class="row d-flex justify-content-end m-4 any-error">
            <div class="col-md-7 alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
       </div>
    @endif
    {{-- Success Massage --}}
    @if(session()->has('success'))
    <div class="row d-flex justify-content-end m-4">
        <div class="col-md-7">
        <div class="alert alert-info" role="alert">
        <span class="badge bg-success">Success</span>
        {{session()->get('success')}}
        </div>
    </div>
    @endif
    <div class="row">
        
        <div class="content">

            <h3 class="title">contact info</h3>

            <div class="info">
                <h3> <i class="fas fa-envelope"><span></span></i>{{$user->email}}</h3>
                <h3> <i class="fas fa-phone"></i>{{$contact->phone}} </h3>
                <!-- <h3> <i class="fas fa-phone"></i> +111-222-3333 </h3> -->
                <h3> <i class="fas fa-map-marker-alt"></i> {{$contact->division}}, {{$contact->country}} </h3>
            </div>

        </div>

        <form action="{{route('contact_form')}}" method="post">
            @csrf
            <input type="text" name="name" placeholder="name" class="box">
            <input type="email" name="email" placeholder="email" class="box">
            <input type="text" name="phone" placeholder="phone" class="box">
            <textarea name="message" id="" cols="30" rows="10" class="box message" placeholder="message"></textarea>
            <button type="submit" class="btn"> send <i class="fas fa-paper-plane"></i> </button>

        </form>
    </div>
    

</section>
@endsection