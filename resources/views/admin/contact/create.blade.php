@extends('layouts.app')
@section('title', 'Create Contact')
@section('content')
    <div class="row justify-content-center ">
        <div class="col-md-6 border border-light p-4">
            <h3 class="text-center text-white">Fill Up the form</h3>
            <hr>
            <form action="{{route('contact.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputage1" class="text-white">Phone</label>
                    <input type="text" name="phone" class="form-control rounded" id="exampleInputphone1" aria-describedby="phoneHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputage1" class="text-white">Division</label>
                    <input type="text" name="division" class="form-control rounded" id="exampleInputdivision1" aria-describedby="divisionHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputage1" class="text-white">Country</label>
                    <input type="text" name="country" class="form-control rounded" id="exampleInputcountry1" aria-describedby="countryHelp">
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