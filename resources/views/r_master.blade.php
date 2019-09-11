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
                    <a class="nav-link" id="{{url('/about')}}"  href="#">Who we Are</a>                   
                </li>
                
                <li class="nav-item">
                        <a class="nav-link" id="pricing"  href="{{url('/membership')}}">Membership</a>                   
                </li>
                <li class="nav-item">
                        <a class="nav-link" id="how"  href="#">Programme & Events</a>                   
                </li>
                <li class="nav-item">
                        <a class="nav-link" id="support"  href="#">Contact Us</a>                   
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
                        <h3>Becoming a Member?</h3>
                        
                        <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Why Join NACC-ABUJA</h5>
                                    <hr>
                                    <p class="card-text">
                                        <ul>
                                            <li><b>CREDIBILITY: </b> Your reputation is greatly increased through NACC Membership</li>
                                            <li><b>LEARNING:</b> Take advantage of various capacity building programs made available to members.</li>
                                            <li><b>VISIBILITY: </b> Get noticed by the business community through increased exposure via our various publications and platforms</li>
                                            <li><b>NETWORKING:</b> Our over 1000 members accross various chapters and various events wach year will help build your business network and attract new clients.</li>
                                            <li><b>DISCOUNTS: </b> Member offers and discounts available to increase your buying power</li>
                                            <li><b>VOICE: </b> We advocate on various issues affecting the business community. Let your voice be heard!</li>
                                        </ul>
                                        
                                    </p>
                        
                                    
                                </div>
                        </div>
                        <hr>
                        <h5>Payment Information:</h5>
                        <p>
                                <h5>Banck Account Info:</h5>
                                <b>Bank Account Number: </b> 1000996203 <br>
                                <b>Account Name: </b> Nigerian American Chamber of Commerce. <br>
                                <b>Bank Name: </b> Keystone Bank Plc
                            </p>
                            <p>
                                <h5>Fees</h5>
                                <b>Registration Fee: </b> NGN 50,000.00 Naira Only
                                <b>Application Fee: </b> NGN 5,000.00 Naira Only
                                <b>Total: NGN 55,000.00 Naira Only</b>
                            </p>
                        
                        <hr>
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
                                
                                Already registered? Click <a href="{{route('login')}}"> Here </a> to Login
                                
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