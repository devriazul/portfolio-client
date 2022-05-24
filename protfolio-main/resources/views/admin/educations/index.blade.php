@extends('layouts.app')
@section('title', 'All Education Page')
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
                                    <th scope="col">Exam Title</th>
                                    <th scope="col">Result</th>
                                    <th scope="col">Distroy</th>
                                    <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($educations as $education)
                        <tr>
                            <th scope="row">{{$education->id}}</th>
                            <td>{{$education->creator->name}}</td>
                            td>{{$education->exam_title}}</td>
                            <td>{{$education->result}}</td>
                            <td>
                            <form action="{{route('education.destroy', $education->id)}}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delate</button>
                            </form>
                            </td>
                            <td>
                                        <a href="{{route('education.edit', $education->id)}}" class="btn btn-primary">Edit</a>
                                        <a href="{{route('education.show', $education->id)}}" class="btn btn-secondary">Details</a>
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