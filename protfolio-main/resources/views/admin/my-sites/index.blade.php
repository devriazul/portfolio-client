@extends('layouts.app')
@section('title', 'My Sites Page')
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
                            <th scope="col">Image</th>
                            <th scope="col">Link</th>
                            <th scope="col">Action</th>
                            <th scope="col">Update</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sites as $site)
                            <tr>
                                <th scope="row">{{$site->id}}</th>
                                <th scope="row">{{$site->creator->name}}</th>
                                <td><img src="{{url($site->image1)}}" alt="" srcset="" height="30" width="100"></td>
                                <td>{{$site->link}}</td>
                                <td>
                                   <form action="{{route('my-site.destroy', $site->id)}}" method="POST">
                                    @method('delete')
                                    @csrf
                                       <button type="submit" class="btn btn-danger">Delate</button>
                                   </form>
                                </td>
                                <td>
                                    <a href="{{route('my-site.edit', $site->id)}}" class="btn btn-primary">Edit</a>
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