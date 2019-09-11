@extends('user_master')
@section('content')

    
    <div class="card">
    <div class="card-body">

            @if (session()->has('message'))
                <div class="alert alert-success" role="alert">
                    {{session()->get('message')}}
                </div>            
            @endif

            @if ($errors->all())
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $error)

                <li>{{$error}}</li>
                    
                @endforeach
                
            </div>            
            @endif

            <h5>Edit Profile</h5>
            <hr>
            
            <form action="{{route('profile.update', auth()->user()->id)}}" method="post">
                    @csrf
                    @method('put')

                    @foreach ($profiles as $profile)
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="card">
                          <div class="card-body">
                            <h3 class="card-title">Contact Information</h3>
                            <p class="card-text">Basic Contact Info</p>
                            <hr>
                            <div class="form-group">
                              <label for="company_name">Company Name</label>
                            <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Registered Name" value="{{$profile->company_name}}"> 
                            </div>

                            <div class="form-group">
                              <label for="date_incorporated">Date of Incorporation</label>
                              <input type="date" class="form-control" name="date_incorporated" id="date_incorporated" aria-describedby="Date_inc" placeholder="Date Incorporated"  value="{{$profile->date_incorporated}}">
                              <small id="Date_inc" class="form-text text-muted">Provide month and year if unsure of exact day</small>
                            </div>

                            <div class="form-group">
                                <label for="office_address">Mailing Address of Registered Office:  </label>
                                <textarea id="office_address" class="form-control" rows="3" name="office_address">{{$profile->office_address}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="correspondence_address">Address For Correspondence</label>
                                <textarea id="correspondence_address" class="form-control" rows="3" name="correspondence_address">{{$profile->correspondence_address}}</textarea>
                                <p class="form-text text-muted">
                                    Include P.O.Box (if any)
                                </p>
                            </div>

                            <div class="form-group">
                              <label for="tel">Tel:</label>
                            <input type="text" class="form-control" name="tel" id="tel" aria-describedby="tel" placeholder="Telephone Number" value="{{$profile->tel}}">
                              <small id="tel" class="form-text text-muted">Office telephone number</small>
                            </div>

                            <div class="form-group">
                              <label for="fax">Fax:</label>
                              <input type="text" class="form-control" name="fax" id="fax"  placeholder="Fax Line"  value="{{$profile->fax}}">                              
                            </div>

                            <div class="form-group">
                              <label for="email">Email Address:</label>
                            <input type="email" class="form-control" name="email" id="email"placeholder="Email Address" value="{{$profile->email}}">
                            </div>

                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="card">
                          <div class="card-body">
                            <h3 class="card-title">Business Activities</h3>
                            <p class="card-text">Your products/services</p>
                            <div class="form-group">
                                <label for="Business_Activities">Main Business Activities</label>
                                <textarea id="Business_Activities" class="form-control" rows="5" name="business_activities">{{$profile->business_activities}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="o_business_activities">Other Business Activities</label>
                                <textarea id="o_business_activities" class="form-control" rows="5" name="other_activities">{{$profile->other_activities}}</textarea>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                  <label for="last_aturnover">Last Annual Turnover</label>
                                  <input type="number"
                                    class="form-control" name="last_aturnover" id="last_aturnover" aria-describedby="lat" placeholder="Last Annual Turnover" value="{{$profile->last_aturnover}}">
                                  <small id="lat" class="form-text text-muted">Must be accurate and verifiable</small>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                  <label for="no_employees">Number of Employees</label>
                                  <input type="number" class="form-control" name="no_employees" id="no_employees" placeholder="Number of Employees" value="{{$profile->no_employees}}">
                                </div>
                            </div>

                            <div class="row">
                                <legend>Names of Directors and Partners <br>
                                  <p class="card-text">(Please provide company name of partners)</p></legend>

                                <div class="col-lg-8">
                                    <div class="form-group">
                                      <label for="partner1">Partner's Name (1)</label>
                                      <input type="text" class="form-control" name="partner1" id="partner1" placeholder="Partners Name" value="{{$profile->partner1}}">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                      <label for="nationality1">Nationality</label>
                                      <input type="list" class="form-control" name="nationality1" id="nationality1" list="nations" placeholder="Nationality">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">

                                    <div class="col-lg-8">
                                        <div class="form-group">
                                          <label for="partner2">Partner's Name (1)</label>
                                          <input type="text" class="form-control" name="partner2" id="partner2" placeholder="Partners Name" value="{{$profile->partner2}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                          <label for="nationality2">Nationality</label>
                                          <input type="list" class="form-control" name="nationality2" id="nationality2" list="nations" placeholder="Nationality">
                                        </div>
                                    </div>
                            </div>

                            <div class="row">
                                  
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                          <label for="partner3">Partner's Name (3)</label>
                                          <input type="text" class="form-control" name="partner3" id="partner3" placeholder="Partners Name" value="{{$profile->partner3}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                          <label for="nationality3">Nationality</label>
                                          <input type="list" class="form-control" name="nationality3" id="nationality3" list="nations" placeholder="Nationality">
                                        </div>
                                    </div>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-6">
                        <div class="card">
                          <div class="card-body">
                            <h3 class="card-title">Personnel</h3>
                          <input id="member_category" type="hidden" value="{{$profile->member_category}}">
                            <p class="card-text">Employees/Partners/Directors</p>

                            <div class="form-group">
                              <label for="pcontact_name">Name of Primary Contact</label>
                              <input type="text" class="form-control" name="pcontact_name" id="pcontact_name" aria-describedby="pcontact_nameh" placeholder="Name of Primary Contact" value="{{$profile->pcontact_name}}">
                              <small id="pcontact_nameh" class="form-text text-muted">(For Chamber Matters)</small>
                            </div>

                            <div class="form-group">
                              <label for="pposition">Position Held</label>
                              <input type="text" class="form-control" name="pposition" id="pposition" placeholder="Postion Held" value="{{$profile->pposition}}">                              
                            </div>

                            <div class="form-group">
                              <label for="pemail">Primary Contact Email</label>
                              <input type="email"
                                class="form-control" name="pemail" id="pemail" placeholder="Primary Contact's Email" value="{{$profile->pemail}}">
                            </div>

                            <div class="form-group">
                              <label for="ptel">Primary Contact Tel:</label>
                              <input type="tel"
                                class="form-control" name="ptel" id="ptel" placeholder="Primary Contact telephone number" value="{{$profile->ptel}}">                              
                            </div>

                            <div class="form-group">
                              <label for="pfax">Primary Contact Fax:</label>
                              <input type="tel"
                                class="form-control" name="pfax" id="pfax" placeholder="Primary Contact fax" value="{{$profile->pfax}}">
                            </div>

                            <h5>Alternative Primary Contact</h5>
                            <hr>
                            <div class="form-group">
                                    <label for="apcontact_name">Name of Alternative Contact</label>
                                    <input type="text" class="form-control" name="apcontact_name" id="apcontact_name" aria-describedby="pcontact_nameh" placeholder="Name of Alternate Primary Contact" value="{{$profile->apcontact_name}}">
                                    <small id="apcontact_name" class="form-text text-muted">(For Chamber Matters)</small>
                                  </div>
      
                                  <div class="form-group">
                                    <label for="apposition">Position Held</label>
                                    <input type="text" class="form-control" name="apposition" id="apposition" placeholder="Postion Held"  value="{{$profile->appostion}}">                              
                                  </div>
      
                                  <div class="form-group">
                                    <label for="apemail">Primary Contact Email</label>
                                    <input type="email"
                                      class="form-control" name="apemail" id="apemail" placeholder="Primary Contact's Email" value="{{$profile->apemail}}">
                                  </div>
      
                                  <div class="form-group">
                                    <label for="aptel">Alternative Primary Contact Tel:</label>
                                    <input type="tel"
                                      class="form-control" name="aptel" id="aptel" placeholder="Primary Contact telephone number" value="{{$profile->aptel}}">                              
                                  </div>
      
                                  <div class="form-group">
                                    <label for="apfax">Alternative Primary Contact Fax:</label>
                                    <input type="tel"
                                      class="form-control" name="apfax" id="apfax" placeholder="Primary Contact fax" value="{{$profile->apfax}}">
                                  </div>
                          </div>
                        </div>
                      </div>
                      
                    
                      <div class="col-lg-6">
                        <div class="card">
                          <div class="card-body">
                            <h3 class="card-title">More Info</h3>
                            <p class="card-text">For Management Perusal</p>
                            <hr>
                            <div class="form-group">
                                <label for="proposed_by">NACC Membership Proposed By/Referred By:</label>
                                <input type="text"
                                  class="form-control" name="proposed_by" id="proposed_by" placeholder="who recommended NACC Membership to you?" value="{{$profile->proposed_by}}">
                                
                              </div>

                            <div class="form-check">                              
                              <input type="checkbox" class="form-check-input" name="usa_interest" id="usa_interest" value="Yes" 
                              @if ($profile->usa_interest=="Yes")
                                  checked
                              @endif
                              > 
                              <label for="usa_interest">Does any USA Company have financial Interest in your company</label>                             
                            </div>
                            <div class="form-group">
                              <label for="usa_company">If so, which company</label>
                              <input type="text"
                                class="form-control" name="usa_company" id="usa_company" placeholder="Enter Company Name" value="{{$profile->usa_company}}">
                              
                            </div>

                            <div class="form-check">
                                <input id="attend_meetings" class="form-check-input" type="checkbox" value="Yes"
                                @if ($profile->attend_meetings=="Yes")
                                checked
                                @endif
                                >
                                <label for="attend_meetings" class="form-check-label">Would you be able to attend our regular monthly meetings if your membership is approved?</label>
                            </div>

                            <div class="form-check">
                                <input id="serve_committee" class="form-check-input" type="checkbox" value="Yes"
                                @if ($profile->serve_committee=="Yes")
                                checked
                                @endif
                            >
                                <label for="serve_committee" class="form-check-label">Would You be prepared to serve on any of our committees?</label>
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-body">
                            <h3 class="card-title">Required Attachments</h3>
                            <p class="card-text">Official Documents</p>

                            <div class="form-group">
                              <label for="financial_report">Company Annual / Financial Report</label>
                              @if ($profile->financial_report!="")
                                <a href="/files/{{$profile->financial_report}}" target="_blank">Download Financial Report</a><br> <small><em>Upload a New One to Change?</em></small>
                              @endif
                              <input type="file" class="form-control-file" name="financial_report" id="financial_report" placeholder="Company Annual Financial Report" aria-describedby="finhelp">
                              <small id="finhelp" class="form-text text-muted">Must be .docx or .pdf format</small>
                            </div>

                            <div class="form-group">
                              <label for="form_c07">Copy of Form C07</label>
                              @if ($profile->form_c07!="")
                                <a href="/files/{{$profile->form_c07}}" target="_blank">Download Form C07</a><br> <small><em>Upload a New One to Change?</em></small>
                              @endif
                              <input type="file" class="form-control-file" name="form_c07" id="form_c07" placeholder="Copy of Form C07">
                            </div>

                            <div class="form-group">
                              <label for="cac">Copy of Certificate of Incorporation</label>
                              @if ($profile->cac!="")
                                <a href="/files/{{$profile->cac}}" target="_blank">Download Certificate of Incorporation</a><br> <small><em>Upload a New One to Change?</em></small>
                              @endif
                              <input type="file" class="form-control-file" name="cac" id="cac" placeholder="CAC Certificate" aria-describedby="cac">
                              <small id="cac" class="form-text text-muted">Must be in pdf or docx format</small>
                            </div>

                            <div class="form-group">
                              <label for="passport">Upload Passport Photograph</label>
                              @if ($profile->passport!="")
                                <a href="/files/{{$profile->passport}}" target="_blank">Download passport</a><br> <small><em>Upload a New One to Change?</em></small>
                              @endif
                              <input type="file" class="form-control-file" name="passport" id="passport" placeholder="passport photograph">
                              
                            </div>
                        
                         
                            <div class="form-group clear float-right">
                                <button type="submit" class="btn btn-primary">
                                   
                                        Update Profile
                                   
                                    </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>                        
                  @endforeach

            </form>

                    
                


        
    </div>    

    </div>
    
@endsection


@section('sidebar')

@stop

<style>
p.card-text{color: green; font-size: 0.8em;}
</style>