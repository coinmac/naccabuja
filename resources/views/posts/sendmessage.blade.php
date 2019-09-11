@extends('user_master')
@section('content')

    
    <div class="card">
        <div class="card-body">

                @if (session()->has('message'))
                    <div class="alert alert-success" role="alert">
                        {{session()->get('message')}}
                    </div>            
                @endif

            <h5 class="card-title"> Send (Bulk) SMS </h5>
            <hr>
        
            @if ($errors->all())
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $error)

                <li>{{$error}}</li>
                    
                @endforeach
                
            </div>            
        @endif
        
        <form action="{{route('sendmessage.store')}}" method="post">
            @csrf
            <div class="form-group row">
                    <div class="col-lg-4">
                            <label for="senderid">Sender ID</label>
                            <input id="senderid" name="senderid" class="form-control" type="text" placeholder="11 Character Maximum" maxlength="11"> 
                    </div>
                    <div class="col-lg-4">
                            <label for="type">SMS Type</label>                      
                                
                                <select id="type" class="form-control">
                                    <option value="0" selected>Text</option>
                                    <option value="1">Flash</option>
                                </select>                        
                    </div>
                    <div class="col-lg-4">
                        <label for="group">Send to Group?</label>                      
                            
                            <select id="group" class="form-control" name="group">
                                <option value="None" selected>No</option>
                                @foreach ($groups as $group)
                                    <option value="{{$group->groupname}}">{{$group->groupname}}</option>
                                @endforeach
                            </select>                        
                </div>
            </div>

            <div class="form-group row">
                    
                            <label for="recipient">Recipient(s)</label>
                            <textarea name="recipient" id="recipient" cols="30" rows="2" class="form-control" placeholder="e.g. +234 80888388938 "></textarea>                    
                    
            </div>

            <div class="form-group row">
                    
                    <label for="message">Message(s)</label>
                    <textarea name="message" id="message" cols="30" rows="5" class="form-control"> </textarea>   
                    
                    <span class="messagecounter alert alert-warning pt-0"></span>
                    <span class="pagecounter  alert alert-warning pt-0 float-right pull-right"></span>
            
            </div>

            <div class="form-group row" style="font-size: 0.7em !important">
                    <div class="col-lg-2">
                            <label for="schedule">Send Now?</label>
                            <input id="schedule" name="schedule" class="form-control" type="checkbox" value="No" checked> 
                    </div>

                    <div class="col-lg-6" id="scheduled">
                        <div class="row">
                            <div class="col-lg-7">
                                    <label for="scheduledate">Schedule Date</label>
                                    <input id="scheduledate" name="scheduledate" class="form-control" type="date"> 
                            </div>
                            <div class="col-lg-5">
                                    <label for="scheduletime">Schedule Time</label>
                                    <input id="scheduletime" name="scheduletime" class="form-control" type="time"> 
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 float-right">
                            <label for="scheduletime small flaot-right" style="color:red; text-align: right;">Please preview first!</label>
                            <button type="submit" class="btn btn-primary float-right">Send Message</button>
                    </div>
            </div>

            
            
        </form>   
        
    </div>    

</div>
    
@endsection


@section('leftbar')
<div class="card">
    <div class="card-body">
        <h5 class="card-title"> My Phone Book </h5>


        <hr>
       
            <table class="table table-dark" id="datatable" style="font-size:0.8em !important">
                <thead class="thead-light">
                    <tr>
                        <th>Select</th>
                        <th>Contact Name</th>
                        <th>Phone Number</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($contacts as $contact)
                    <tr>
                        <td><input type="checkbox"  value="{{$contact->phone_number}}" id="{{$contact->phone_number}}" onclick="addphoneNumber({{$contact->phone_number}});"></td>
                        <td>{{$contact->contact_name}}</td>
                        <td>{{$contact->phone_number}}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                            <th>Select</th>
                            <th>Contact Name</th>
                            <th>Phone Number</th>
                    </tr>
                </tfoot>
            </table>
        
    </div>
</div>
@stop