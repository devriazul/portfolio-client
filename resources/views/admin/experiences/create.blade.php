@extends('layouts.app')
@section('title', 'Create Experience')
@section('content')
    <div class="row justify-content-center ">
        <div class="col-md-6 border border-light p-4">
            <h3 class="text-center text-white">Fill Up the form</h3>
            <hr>
            <form action="{{route('experience.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputage1" class="text-white">Number</label>
                    <input type="text" name="number" class="form-control rounded" id="exampleInputlanguage21" aria-describedby="language2Help">
                </div>
                <div class="form-group">
                    <label for="exampleInputage1" class="text-white">Title</label>
                    <!-- <input type="text" name="title" class="form-control rounded" id="exampleInputlanguage21" aria-describedby="language2Help"> -->
                    <textarea class="form-control" type='text' name="title" id="" cols="60" rows="5"></textarea>
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