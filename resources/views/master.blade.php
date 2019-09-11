<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>NIGERIAN-AMERICAN CHAMBER OF COMMERCE (ABUJA-CHAPTER) </title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/mystyles.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
</head>
<body>
    
    
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:darkgreen;">
        <a href="#" class="logo"><img class="img rounded img-thumbnail" src="/img/logo.png" alt="NACC-ABUJA">
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="about"  href="{{url('/about')}}">Who we Are</a>                   
                </li>
                
                <li class="nav-item">
                        <a class="nav-link" id="pricing"  href="{{url('/membership')}}">Membership</a>                   
                </li>
                <li class="nav-item">
                        <a class="nav-link" id="how"  href="{{url('/events')}}">Programme & Events</a>                   
                </li>
                <li class="nav-item">
                        <a class="nav-link" id="support"  href="{{url('/contact')}}">Contact Us</a>                   
                </li>
                <li class="nav-item ml-5 text-white pt-2">
                        For Enquiries? Call: (+234) 0802 326 2908                   
                </li>               
                
            </ul>
            
        </div>
    </nav>
    <div class="container mt-5">
        
                <div class="row">
                    <div class="col-lg-8">
                        @yield('content')
                    </div>
                    <div class="col-lg-4">
                        
                        @yield('sidebar')

                        <hr>
                        <h3>News and Events</h3>

                        <hr>
                        @foreach ($posts as $post)
                        <div class="card mt-2">
                            <div class="card-body">
                                <h5 class="card-title"> <a href=" {{route('posts.show', $post->id)}} ">{{ $post->title }} </a></h5>
                                @auth                                
                                <a href="{{route('posts.edit',$post->id)}}" class="btn btn-info">Edit</a>
                                <form onsubmit="return confirm('Are you sure you want to delete the post: {{$post->title}}?')" action="{{route('posts.destroy',$post->id)}}" method="post" class="d-inline-block">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                @endauth
                            </div>
                        </div>
                        
                        @endforeach

                        {{$posts->links()}}
                        <hr>
                        <img src="/img/invitation.jpg" alt="invitation" width="100%" height="auto">
                        <div class="nav-item my-4 my-lg-2">
                            @auth
                                <form method="post" action="{{route('logout')}}" class="d-inline-block float-right">
                                    @csrf
                                    <div class="btn-group" role="group" aria-label="Button group">                            
                                            <a class="btn btn-info" href="{{route('sendmessage.index')}}">My Account</a>
                                            <button class="btn btn-primary">{{auth()->user()->name}},  Logout </button>
                                    </div>
                                </form>
                                
                            @else                
                                <div class="btn-group" role="group" aria-label="Button group">
                                <a href="{{route('login')}}" class="btn btn-danger"> Login </a><a href="{{route('register')}}" class="btn btn-primary"> Register </a>
                                </div>
                            @endauth
                        </div>
                    </div>
                </div>
    </div>
<div class="bg-dark text-white p-4 text-center">All rights reserved - NIGERIAN-AMERICAN CHAMBER OF COMMERCE, ABUJA {{date("Y")}}</div>
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script>
        $('#aboutcontent,#pricingcontent,#howcontent,#faqscontent,#supportcontent').hide();
        $('.nav-link').click(function(){
            
            $('#aboutcontent,#pricingcontent,#howcontent,#faqscontent,#supportcontent').hide();
            if(this.id=="homelink"){
                $('#homecontent').show();
            }else{
                $('#homecontent').hide();
                var clicked = this.id;        
                $("#"+clicked+"content").show();
            }

        });

    </script>
    <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
                            
</body>
</html>