<?php

namespace App\Http\Controllers;

use App\Educational;
use Illuminate\Http\Request;

class EducationalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('educational.index'); 
    }
     public function event()
    {
        
        return view('educational.event'); 
    }
    
    
    
    public function seniorHigh()
    {
        
        return view('educational.admissions.seniorHigh'); 
    }
    public function highSchool(){
        
        return view('educational.admissions.highSchool'); 
    }
    public function scholarship(){
        
        return view('educational.admissions.scholarship'); 
    }
    
    
    public function guidanceCenter(){
        
        return view('educational.academicServices.guidanceCenter'); 
    } 
    public function registrar(){
        
        return view('educational.academicServices.registrar'); 
    } 
    public function clinic(){
        
        return view('educational.academicServices.clinic'); 
    }
     public function library(){
        
        return view('educational.academicServices.library'); 
    }
    
    
    public function building(){
        
        return view('educational.linkages.building'); 
    }
    public function staff(){
        
        return view('educational.linkages.staff'); 
    }
    public function teacher(){
        
        return view('educational.linkages.teacher'); 
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Educational  $educational
     * @return \Illuminate\Http\Response
     */
    public function show(Educational $educational)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Educational  $educational
     * @return \Illuminate\Http\Response
     */
    public function edit(Educational $educational)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Educational  $educational
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Educational $educational)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Educational  $educational
     * @return \Illuminate\Http\Response
     */
    public function destroy(Educational $educational)
    {
        //
    }
}
