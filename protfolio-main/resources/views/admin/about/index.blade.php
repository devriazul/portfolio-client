@extends('layouts.app')
@section('title', 'About Page')
@section('content')
<div class="calender-area mg-tb-30">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
           
                        <table class="table text-light table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Age</th>
                            <th scope="col">Qualification</th>
                            <!-- <th scope="col">post</th> -->
                            <th scope="col">language1</th>
                            <th scope="col">Action</th>
                            <th scope="col">Show</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($abouts as $about)
                            <tr>
                                <th scope="row">{{$about->id}}</th>
                                <td>{{$about->age}}</td>
                                <td>{{$about->qualification}}</td>
                                <td>{{$about->language1}}</td>
                                <td>
                                   <form action="{{route('about.destroy', $about->id)}}" method="POST">
                                    @method('delete')
                                    @csrf
                                       <button type="submit" class="btn btn-danger">Delate</button>
                                   </form>
                                </td>
                                <td>
                                    <a href="{{route('about.edit', $about->id)}}" class="btn btn-primary">Edit</a>
                                    <a href="{{route('about.show', $about->id)}}" class="btn btn-secondary">Details</a>
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