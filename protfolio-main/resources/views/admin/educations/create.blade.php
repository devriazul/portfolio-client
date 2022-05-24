@extends('layouts.app')
@section('title', 'Create Education')
@section('content')
    <div class="row justify-content-center ">
        <div class="col-md-6 border border-light p-4">
            <h3 class="text-center text-white">Fill Up the form</h3>
            <hr>
            <form action="{{route('education.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputage1" class="text-white">Exam Title</label>
                    <input type="text" name="exam_title" class="form-control rounded" id="exampleInputexam_title1" aria-describedby="exam_titleHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputage1" class="text-white">Major</label>
                    <input type="text" name="major" class="form-control rounded" id="exampleInputmajor1" aria-describedby="majorHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputage1" class="text-white">Institute</label>
                    <input type="text" name="institute" class="form-control rounded" id="exampleInputinstitute1" aria-describedby="instituteHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputage1" class="text-white">Result</label>
                    <input type="text" name="result" class="form-control rounded" id="exampleInputresult1" aria-describedby="resultHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputage1" class="text-white">Passing Year</label>
                    <input type="text" name="passing_year" class="form-control rounded" id="exampleInputpassing_year1" aria-describedby="passing_yearHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputage1" class="text-white">Duration</label>
                    <input type="text" name="duration" class="form-control" id="exampleInputduration1" aria-describedby="durationHelp">
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