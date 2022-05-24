@extends('layouts.app')
@section('title', 'All Experience Page')
@section('content')
<div class="calender-area mg-tb-30">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
           
                        <table class="table text-light table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Creator</th>
                            <th scope="col">Number</th>
                            <th scope="col">Title</th>
                            <th scope="col">Distroy</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($experiences as $experience)
                            <tr>
                                <th scope="row">{{$experience->id}}</th>
                                <td>{{$experience->creator->name}}</td>
                                <td>{{$experience->number}}</td>
                                <td>{{$experience->title}}</td>
                                <td>
                                   <form action="{{route('experience.destroy', $experience->id)}}" method="POST">
                                    @method('delete')
                                    @csrf
                                       <button type="submit" class="btn btn-danger">Delate</button>
                                   </form>
                                </td>
                                <td>
                                    <a href="{{route('experience.edit', $experience->id)}}" class="btn btn-primary">Edit</a>
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