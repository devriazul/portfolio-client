@extends('layouts.app')
@section('title', 'All Users')
@section('content')
    <div class="calender-area mg-tb-30">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
           
                        <table class="table text-light table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                @if(auth()->user()->id !== $user->id)
                                    @if($user->is_active)
                                    <a class="btn btn-danger" href="{{route('users.change_status', $user->id)}}">Unblock</a>
                                    @else
                                    <a class="btn btn-success" href="{{route('users.change_status', $user->id)}}">Block</a>
                                    @endif
                                @endif
                                <a class="btn btn-secondary" href="{{route('users.show', $user->id)}}">Details</a>
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