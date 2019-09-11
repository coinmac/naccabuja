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
                    <a class="nav-link" href="{{url('/')}}">Members Area <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="{{url('/about')}}"  href="#">Announcement</a>                   
                </li>
                
                <li class="nav-item">
                        <a class="nav-link" id="pricing"  href="{{url('/membership')}}">Messages</a>                   
                </li>
                <li class="nav-item">
                        <a class="nav-link" id="how"  href="#">Payments</a>                   
                </li>
                <li class="nav-item nav-link text-white">
                        @auth
                            (Welcome, {{auth()->user()->name }}!)
                        @endauth                   
                </li>
                               
                
            </ul>
            
        </div>
    </nav>
    <div class="container mt-5">
        
                <div class="row">
                    <div class="col-lg-10">
                        @yield('content')
                    </div>
                    <div class="col-lg-2">
                        @yield('sidebar')
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
    <script src="/js/nicEdit.js" type="text/javascript"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(
            function(){
                new nicEditor({fullPanel : true}).panelInstance('.editor'); 
            });
    </script>
                            
</body>
</html>