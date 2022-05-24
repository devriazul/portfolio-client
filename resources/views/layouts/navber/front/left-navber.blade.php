
<header>

    <div class="user">
        <img src="{{url($about->profile_picture)}}" alt="">
        <h3 class="name">{{$user->name}}</h3>
        <p class="post">{{$about->post}}</p>
    </div>

    <nav class="navbar">
        <ul class="justify-content-center">
            <li><a  href="/">home</a></li>
            <li><a  href="{{route('about-page')}}">about</a></li>
            <li><a  href="{{route('education-page')}}">education</a></li>
            <li><a  href="{{route('my-sites')}}">My Sites</a></li>
            <li><a  href="{{route('contact')}}">contact</a></li>
        </ul>
        
    </nav>

</header>