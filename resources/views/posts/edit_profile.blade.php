@extends('user_master')
@section('leftbar')

    
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
                              <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Registered Name"> 
                            </div>

                            <div class="form-group">
                              <label for="date_incorporated">Date of Incorporation</label>
                              <input type="text" class="form-control" name="date_incorporated" id="date_incorporated" aria-describedby="Date_inc" placeholder="Date Incorporated">
                              <small id="Date_inc" class="form-text text-muted">Provide month and year if unsure of exact day</small>
                            </div>

                            <div class="form-group">
                                <label for="office_address">Mailing Address of Registered Office:  </label>
                                <textarea id="office_address" class="form-control" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="correspondence_address">Address For Correspondence</label>
                                <textarea id="correspondence_address" class="form-control" rows="3"></textarea>
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
                              <input type="text" class="form-control" name="fax" id="fax"  placeholder="Fax Line">                              
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
                                <textarea id="Business_Activities" class="form-control" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="o_business_activities">Other Business Activities</label>
                                <textarea id="o_business_activities" class="form-control" rows="5"></textarea>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                  <label for="last_aturnover">Last Annual Turnover</label>
                                  <input type="number"
                                    class="form-control" name="last_aturnover" id="last_aturnover" aria-describedby="lat" placeholder="Last Annual Turnover">
                                  <small id="lat" class="form-text text-muted">Must be accurate and verifiable</small>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                  <label for="no_employees">Number of Employees</label>
                                  <input type="text" class="form-control" name="no_employees" id="no_employees" placeholder="Number of Employees">
                                </div>
                            </div>

                            <div class="row">
                                <legend>Names of Directors and Partners <small>(Please provide company name of partners)</small></legend>

                                <div class="col-lg-8">
                                    <div class="form-group">
                                      <label for="partner1">Partner's Name (1)</label>
                                      <input type="text" class="form-control" name="partner1" id="partner1" placeholder="Partners Name">
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
                                          <input type="text" class="form-control" name="partner2" id="partner2" placeholder="Partners Name">
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
                                          <input type="text" class="form-control" name="partner3" id="partner3" placeholder="Partners Name">
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
                            <p class="card-text">Employees/Partners/Directors</p>

                            <div class="form-group">
                              <label for="pcontact_name">Name of Primary Contact</label>
                              <input type="text" class="form-control" name="pcontact_name" id="pcontact_name" aria-describedby="pcontact_nameh" placeholder="Name of Primary Contact">
                              <small id="pcontact_nameh" class="form-text text-muted">(For Chamber Matters)</small>
                            </div>

                            <div class="form-group">
                              <label for="pposition">Position Held</label>
                              <input type="text" class="form-control" name="pposition" id="pposition" placeholder="Postion Held">                              
                            </div>

                            <div class="form-group">
                              <label for="pemail">Primary Contact Email</label>
                              <input type="email"
                                class="form-control" name="pemail" id="pemail" placeholder="Primary Contact's Email">
                            </div>

                            <div class="form-group">
                              <label for="ptel">Primary Contact Tel:</label>
                              <input type="tel"
                                class="form-control" name="ptel" id="ptel" placeholder="Primary Contact telephone number">                              
                            </div>

                            <div class="form-group">
                              <label for="pfax">Primary Contact Fax:</label>
                              <input type="tel"
                                class="form-control" name="pfax" id="pfax" placeholder="Primary Contact fax">
                            </div>

                            <h5>Alternative Primary Contact</h5>
                            <hr>
                            <div class="form-group">
                                    <label for="apcontact_name">Name of Alternative Contact</label>
                                    <input type="text" class="form-control" name="apcontact_name" id="apcontact_name" aria-describedby="pcontact_nameh" placeholder="Name of Primary Contact">
                                    <small id="apcontact_name" class="form-text text-muted">(For Chamber Matters)</small>
                                  </div>
      
                                  <div class="form-group">
                                    <label for="apposition">Position Held</label>
                                    <input type="text" class="form-control" name="apposition" id="apposition" placeholder="Postion Held">                              
                                  </div>
      
                                  <div class="form-group">
                                    <label for="apemail">Primary Contact Email</label>
                                    <input type="email"
                                      class="form-control" name="apemail" id="apemail" placeholder="Primary Contact's Email">
                                  </div>
      
                                  <div class="form-group">
                                    <label for="aptel">Alternative Primary Contact Tel:</label>
                                    <input type="tel"
                                      class="form-control" name="aptel" id="aptel" placeholder="Primary Contact telephone number">                              
                                  </div>
      
                                  <div class="form-group">
                                    <label for="apfax">Alternative Primary Contact Fax:</label>
                                    <input type="tel"
                                      class="form-control" name="apfax" id="apfax" placeholder="Primary Contact fax">
                                  </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="card">
                          <div class="card-body">
                            <h3 class="card-title">Primary Contact</h3>
                            <p class="card-text">(For Chamber Matters)</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="card">
                          <div class="card-body">
                            <h3 class="card-title">More Info</h3>
                            <p class="card-text">For Management Perusal</p>
                            <div class="form-group">
                              <label for="usa_interest">Does any USA Company have financial Interest in your company</label>
                              <input type="checkbox" class="form-control" name="usa_interest" id="usa_interest">                              
                            </div>
                            <div class="form-group">
                              <label for="usa_company">If so, which company</label>
                              <input type="text"
                                class="form-control" name="usa_company" id="usa_company" placeholder="Enter Company Name">
                              
                            </div>

                            <div class="form-check">
                                <input id="attend_meetings" class="form-check-input" type="checkbox">
                                <label for="attend_meetings" class="form-check-label">Would you be able to attend our regular monthly meetings if your membership is approved?</label>
                            </div>

                            <div class="form-check">
                                <input id="serve_committee" class="form-check-input" type="checkbox">
                                <label for="serve_committee" class="form-check-label">Would You be prepared to serve on any of our committees?</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="card">
                          <div class="card-body">
                            <h3 class="card-title">Required Attachments</h3>
                            <p class="card-text">Official Documents</p>

                            <div class="form-group">
                              <label for="financial_report">Company Annual / Financial Report</label>
                              <input type="file" class="form-control-file" name="financial_report" id="financial_report" placeholder="Company Annual Financial Report" aria-describedby="finhelp">
                              <small id="finhelp" class="form-text text-muted">Must be .docx or .pdf format</small>
                            </div>

                            <div class="form-group">
                              <label for="form_c07">Copy of Form C07</label>
                              <input type="file" class="form-control-file" name="form_c07" id="form_c07" placeholder="Copy of Form C07">
                            </div>

                            <div class="form-group">
                              <label for="cac">Copy of Certificate of Incorporation</label>
                              <input type="file" class="form-control-file" name="cac" id="cac" placeholder="CAC Certificate" aria-describedby="cac">
                              <small id="cac" class="form-text text-muted">Must be in pdf or docx format</small>
                            </div>

                            <div class="form-group">
                              <label for="passport">Upload Passport Photograph</label>
                              <input type="file" class="form-control-file" name="passport" id="passport" placeholder="passport photograph">
                              
                            </div>

                            <button type="submit" class="btn btn-primary">Register</button>
                        
                          </div>
                        </div>
                      </div>
                    </div>

                        
                    @endforeach

                    <div class="form-group">
                        <label for="name">Full Name</label>
                    <input id="name" name="name" class="form-control" type="text" value="{{auth()->user()->name}}">
                    </div>
                    <div class="form-group">
                        <label for="phone_numver">Phone Number</label>
                    <input id="phone_number" class="form-control" type="text" name="phone_number" value="{{auth()->user()->phone_number}}" required>
                    </div>
                    <div class="form-group">
                        <label for="passport">Text</label>
                        <input id="passport" class="form-control-file" type="file" name="passport" value="{{auth()->user()->passport}}">
                    </div>
                    <button type="submit" class="btn btn-outline-primary float-right">Update Contact</button>
                </form>
                


        
    </div>    

    </div>
    
@endsection


@section('content')
<div class="card">
    <div class="card-body">
            <h5 class="card-title"> My Phone Book </h5>
            <table class="table table-dark" id="datatable">
                <thead class="thead-light">
                    <tr>
                        <th>Contact Name</th>
                        <th>Phone Number</th>
                        <th>Contact Group</th>
                        <th>Actions</th>
                        
                    </tr>
                </thead>
                <tbody>
                @foreach ($contacts as $contact)  
                    <tr>
                        <td>{{ $contact->contact_name }}</td>
                        <td>{{ $contact->phone_number }}</td>
                        <td>{{ $contact->phonegroup }}</td>
                        <td>
                            @auth
                                <div class="btn-group" role="group" aria-label="Button group">
                                    <a href="{{route('phonebook.edit',$contact->id)}}" class="btn btn-info">Edit</a>
                                    <form onsubmit="return confirm('Are you sure you want to delete the Contact: {{$contact->contact_name}}?')" action="{{route('phonebook.destroy',$contact->id)}}" method="post" class="d-inline-block">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>  
                            @endauth
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot class="thead-light">
                    <tr>
                            <th>Contact Name</th>
                            <th>Phone Number</th>
                            <th>Contact Group</th>
                            <th>Actions</th>
                    </tr>
                </tfoot>
            </table>
            
        
    </div>
</div>
@stop