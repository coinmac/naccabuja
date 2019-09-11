@extends('master')
@section('content')

<div id="homeslider" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li class="active" data-target="#homeslider" data-slide-to="0" aria-current="location"></li>
        <li data-target="#homeslider" data-slide-to="1"></li>
        <li data-target="#homeslider" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="/img/slides/slide1.jpg" alt="SLIDE 1">
            <div class="carousel-caption d-none d-md-block">
                <h5>Welcome</h5>
                <p>The Nigerian-American Chamber of Commerce opens your way to accessing opportunities in the american market</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/img/slides/slide2.jpg" alt="SLIDE 2">
            <div class="carousel-caption d-none d-md-block">
                <h5>The Opportunities</h5>
                <p>Easy Access to American Companies, Fairer VISA policies, First Hand Access to Business Information in America, etc</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/img/slides/slide3.jpg" alt="SLIDE 2">
            <div class="carousel-caption d-none d-md-block">
                <h5>Upcoming Events</h5>
                <p>2019 - Events and Conferences. Venue: Bayelsa Guest House, Maitama Abuja | Date: Coming Soon</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#homeslider" data-slide="prev" role="button">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#homeslider" data-slide="next" role="button">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="jumbotron jumbotron-fluid p-5">
    <h3 class="display-6">NIGERIAN-AMERICAN CHAMBER OF COMMERCE (ABUJA CHAPTER)</h3>
    <p class="lead">...Your licence to exploring limitless opportunies in America</p>
    <hr class="my-4">
    <p>Welcome!, this website is the official online presence of one of America's most reputable organization which has chapters all over the world. The Abuja Chapter which is located at te heart of the Federal Capital Territory of Nigeria is positioned to directly interact and relate the the seat of American Diplomacy with the Giant of Africa - Nigeria.</p>
    <p>The Abuja Chapter, because of its advantaged administrative and geographic position aims to play a leading role as the first point of call to businesses intending to leverage the organization's benefits in Nigeria.</p>
    <p>We welcome all eligible businesses, corporate organizations and firms to this multinational platform to benefit from the benevolent provisions of this great chamber.</p>
<p>Prospective members can click below to learn more about the membership information <a href="{{url('/membership')}}" class="btn display-inline btn-info float-right btn-info-small"> Membership Info</a></p>
</div>


<div class="row">
    <div class="col-lg-6">
    <div class="card">
        <div class="card-body">
        <h3 class="card-title">UPCOMING EVENTS</h3>
        <p class="card-text">2018/2019 Meeting of the Nigerian-American Chamber of Commerce will hold soon. Please check back soon for details.</p>
        </div>
    </div>
    </div>
    <div class="col-lg-6">
    <div class="card">
        <div class="card-body">
            <i class="fa fa-bullhorn    "></i>
        <h3 class="card-title">ANNOUNCEMENTS</h3>
        <p class="card-text">Membership is open to all and sundry from all industries and specialities that meet the requirements for membership. Visit the membership page for more.</p>
        </div>
    </div>
    </div>
</div>

@endsection

@section('sidebar')
    <div class="card text-center p-2">
        <h5>Our Mission</h5>
        
        <p>To be a credible and foremost channel for fostering business and services between Nigeria and the United States.</p>
        <h5>Our Mission</h5>
        <p>To advance economic cooperation between Nigeria and the United States through promotion of business and services that improve trade relations and prosperity of both nations.</p>
    
    </div>
    <hr>  
@endsection