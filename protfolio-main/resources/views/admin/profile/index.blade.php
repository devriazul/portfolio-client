@extends('layouts.app')
@section('title', 'All Experience Page')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-5">
    <div class="card text-center">
        <div class="card-header">
            <h5 class="card-title"># {{$user->id}}</h5>
            <h5 class="card-title">{{$user->name}}</h5>
        </div>
        <div class="card-body">
            <h3>Change The Password</h3>
            <form action="{{route('profile.change_password', $user->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputage1" class="text-white">Old Password</label>
                    <input type="password" name="oldPassword" class="form-control rounded" id="exampleInputlanguage21" aria-describedby="language2Help" placeholder="Enter old password">
                </div>
                <div class="form-group">
                    <label for="exampleInputage1" class="text-white">New Password</label>
                    <input type="password" name="newPassword" class="form-control rounded" id="exampleInputlanguage21" aria-describedby="language2Help" placeholder="Enter new password">
                </div>
                <div class="form-group">
                    <label for="exampleInputage1" class="text-white">Confirm Password</label>
                    <input type="password" name="confirmPassword" class="form-control rounded" id="exampleInputlanguage21" aria-describedby="language2Help" placeholder="Enter confirm password">
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
            </form>
        </div>
        <div class="card-footer text-muted">
        </div>
        </div>
    </div>
</div>
@endsection