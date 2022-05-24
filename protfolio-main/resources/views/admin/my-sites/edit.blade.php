@extends('layouts.app')
@section('title', 'Update My Sites')
@section('content')
    <div class="row justify-content-center ">
        <div class="col-md-6 border border-light p-4">
            <h3 class="text-center text-white">Fill Up the form</h3>
            <hr>
            <form action="{{route('my-site.update', $mySite->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="exampleInputage1" class="text-white">Link</label>
                    <input type="text" name="link" class="form-control rounded" id="exampleInputlink1" aria-describedby="linkHelp" value="{{$mySite->link}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputage1" class="text-white">image1</label>
                    <input type="file" name="image1" class="form-control rounded" id="exampleInputimage1" aria-describedby="image1Help" value="{{$mySite->image1}}">
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