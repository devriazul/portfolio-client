@extends('layouts.app')
@section('title', 'Contact Page')
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
                            <th scope="col">phone</th>
                            <th scope="col">division</th>
                            <th scope="col">country</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $contact)
                            <tr>
                                <th scope="row">{{$contact->id}}</th>
                                <td>{{$contact->creator->name}}</td>
                                <td>{{$contact->phone}}</td>
                                <td>{{$contact->division}}</td>
                                <td>{{$contact->country}}</td>
                                <td>
                                   <form action="{{route('contact.destroy', $contact->id)}}" method="POST">
                                    @method('delete')
                                    @csrf
                                       <button type="submit" class="btn btn-danger">Delate</button>
                                   </form>
                                </td>
                                <td>
                                    <a href="{{route('contact.edit', $contact->id)}}" class="btn btn-primary">Edit</a>
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