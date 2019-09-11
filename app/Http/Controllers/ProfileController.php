<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function __construct (){
        $this->middleware('auth')->except(['index','show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = Profile::where('id',auth()->user()->id)->get();
        return view('profile',['profiles'=>$profile]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect(route('profile'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        $profile = Profile::where('id',auth()->user()->id)->get();
        return view('edit_profile',['profile'=>$profile]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {   
        $this->validate($request, [
        'passport' => 'image|mimes:png,jpg,jpeg|max:50000',
        'cac' => 'file|mimes:pdf,docx,zip|max:50000',
        'form_c07' =>'file|mimes:pdf,docx,zip|max:50000',
        'financial_report' =>'file|mimes:pdf,docx,zip|max:50000',
        'cac' =>'file|mimes:pdf,docx,zip|max:50000'
        ]);
        
        if ($request->hasFile('passport')) {
            $image = $request->file('passport');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $name);
            
        }

        if ($request->hasFile('cac')) {
            $image = $request->file('cac');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $name);
            
        }

        if ($request->hasFile('financial_report')) {
            $image = $request->file('financial_report');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $name);
            
        }

        if ($request->hasFile('form_c07')) {
            $image = $request->file('form_c07');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $name);
            
        }

        $profile->company_name=$request->company_name;
        $profile->date_incorporated=$request->date_incorporated;
        $profile->office_address=$request->office_address;
        $profile->correspondence_address=$request->correspondence_address;
        $profile->tel=$request->tel;
        $profile->fax=$request->fax;
        $profile->email=$request->email;
        $profile->business_activities=$request->business_activities;
        $profile->other_activities=$request->other_activities;
        $profile->authorized_sharecapital=$request->authorized_sharecapital;
        $profile->last_aturnover=$request->last_aturnover;
        $profile->no_employees=$request->no_employees;
        $profile->partner1=$request->partner1."-".$request->nationality1;
        $profile->partner2=$request->partner2."-".$request->nationality2;
        $profile->partner3=$request->partner3."-".$request->nationality3;
        $profile->member_category=$request->member_category;
        $profile->pcontact_name=$request->pcontact_name;
        $profile->pposition=$request->pposition;
        $profile->pemail=$request->pemail;
        $profile->ptel=$request->ptel;
        $profile->pfax=$request->pfax;
        $profile->apcontact_name=$request->apcontact_name;
        $profile->apposition=$request->apposition;
        $profile->apemail=$request->apemail;
        $profile->aptel=$request->aptel;
        $profile->apfax=$request->apfax;
        $profile->usa_interest=$request->usa_interest;
        $profile->usa_company=$request->usa_company;
        $profile->attend_meetings=$request->attend_meetings;
        $profile->serve_committee=$request->serve_committee;
        $profile->proposed_by=$request->proposed_by;
        $profile->memberno=auth()->user()->memberno;
        $profile->financial_report=$request->financial_report;
        $profile->form_c07=$request->form_c07;
        $profile->cac=$request->cac;
        $profile->passport=$request->passport;
        $profile->userid=auth()->user()->id;
        $profile->save();
        session()->flash('message','Your Profile has been updated has been updated successfully!');        

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        
    }

    public function updatepassportupdatepassport(Request $request, Profile $profile){
        $passport = $request->file('passport');
        $extension = $passport->getClientOriginalExtension();
        Storage::disk('public/'.auth()->user->id)->put($passport->getFilename().'.'.$extension,  File::get($passport));
    }
}
