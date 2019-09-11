@extends('master')
@section('content')

<p>
        <div class="jumbotron lead">
        <span class="h4">Membership to NACC is Open to all businesses which are legally registered with the Corporate Affairs Commission with verifying company details.</div>
</p>

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
<p class="text-center p-5"><a href="{{route('register')}}" class="btn btn-success float-center center">Click Here to Sign up</a></p>
<p><h5>NACC MEMBER BENEFITS INFOGRAPH</h5>
<img src="/img/benefits.jpg" width="100%" height="auto" alt="benefits">
</p>
@endsection

@section('sidebar')
<h3>Payment Information</h3>
<hr>
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
@endsection