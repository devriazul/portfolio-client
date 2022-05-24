@extends('layouts.app')
@section('title', 'Create About')
@section('content')
    <div class="row justify-content-center ">
        <div class="col-md-6 border border-light p-4">
            <h3 class="text-center text-white">Fill Up the form</h3>
            <hr>
            <form action="{{route('about.store',  $about->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputage1" class="text-white">Age</label>
                    <input type="text" name="age" class="form-control rounded" id="exampleInputage1" aria-describedby="ageHelp">
                </div>
                <!-- <div class="form-group">
                    <label for="exampleInputage1" class="text-white">Phone</label>
                    <input type="number" name="phone" class="form-control rounded" id="exampleInputage1" aria-describedby="ageHelp">
                </div> -->
                <div class="form-group">
                    <label for="exampleInputage1" class="text-white">Profile Picture</label>
                    <input type="file" name="profile_picture" class="form-control rounded" id="exampleInputpost1" aria-describedby="postHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputage1" class="text-white">Qualification</label>
                    <input type="text" name="qualification" class="form-control rounded" id="exampleInputqualification1" aria-describedby="qualificationHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputage1" class="text-white">Post</label>
                    <input type="text" name="post" class="form-control rounded" id="exampleInputpost1" aria-describedby="postHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputage1" class="text-white">Language1</label>
                    <input type="text" name="language1" class="form-control rounded" id="exampleInputlanguage11" aria-describedby="language1Help">
                </div>
                <div class="form-group">
                    <label for="exampleInputage1" class="text-white">Language2</label>
                    <input type="text" name="language2" class="form-control rounded" id="exampleInputlanguage21" aria-describedby="language2Help">
                </div>
                <div class="form-group">
                    <label for="exampleInputage1" class="text-white">Language3</label>
                    <input type="text" name="language3" class="form-control" id="exampleInputlanguage31" aria-describedby="language3Help">
                </div>
                <div class="form-group">
                    <label for="exampleInputage1" class="text-white">Language4</label>
                    <input type="text" name="language4" class="form-control" id="exampleInputlanguage41" aria-describedby="language4Help">
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