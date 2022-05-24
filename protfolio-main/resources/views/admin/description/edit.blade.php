@extends('layouts.app')
@section('title', 'Edit About')
@section('content')
    <div class="row justify-content-center ">
        <div class="col-md-6 border border-light p-4">
            <h3 class="text-center text-white">Fill Up the form</h3>
            <hr>
            <form action="{{route('description.update', $description->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="exampleInputage1" class="text-white">Description</label>
                    <textarea class="form-control" type='text' name="description" id="" cols="60" rows="5">{{$description->description}}</textarea>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label text-white" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
        </form>
        </div>
    </div>
@endsection