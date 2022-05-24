@extends('layouts.app')
@section('title', 'All Users')
@section('content')
<div class="row justify-content-center mt-5 mb-5">
    <div class="col-lg-5 col-md-3 col-sm-3 col-xs-12 mt-5">
        <div class="hpanel blog-box responsive-mg-b-30">
                                <div class="panel-heading custom-blog-hd">
                                    <div class="media clearfix">
                                        <a class="pull-left">
                                                <img class="img-circle" src="{{$about->profile_picture}}" alt="profile-picture" height="50" width="80">
                                            </a>
                                        <div class="media-body blog-std ">
                                            <p><span class="text-secondary"> Created by: </span><span class="font-bold text-info">{{$user->name}}</span> </p>
                                            <p><span class="text-secondary">Email Address:</span> <span class="font-bold text-info">{{$user->email}}</span> </p>
                                            <p><span class="text-secondary"> Status: </span><span class="font-bold text-info">{{$user->status}}</span> </p>
                                            <p><span class="text-secondary"> Role : </span><span class="font-bold text-info">{{$user->role->name}}</span> </p>
                                            <p class="text-muted">{{$user->created_at}} {{$user->created_at->diffForHumans()}}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="panel-body blog-pra">
                                    <a href="blog_details.html">
                                        <h4>TIPS FOR BEAUTY</h4>
                                    </a>
                                    <p>
                                        There are many variations of the passages of Lorem Ipsum onece available, but the majority have suffered alteration in some form, by injected humour...
                                    </p>
                                </div> -->
                                <!-- <div class="panel-footer">
                                    <span class="pull-right"><i class="fa fa-comments-o"> </i> 22 comments</span>
                                    <i class="fa fa-eye"> </i> 142 views
                                </div> -->
        </div>
    </div>
</div>
@endsection