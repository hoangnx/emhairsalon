<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Appointment;

class AppointmentFormController extends Controller
{
    public function getAppointmentForm()
    {
    	return view('customer.appointment');
    }

    public function postAppointmentForm(Request $request)
    {
    	$request->validate(
    		[
    			'cus_name'=>'required',
	    		'cus_email'=>'required',
	    		'brand'=>'required',
	    		'service'=>'required',
	    		'date'=>'required',

    		],
    		[
    			'cus_name.required'=>'Full name is required',
    			
    		]	
    	);

    	$appointment = new Appointment;
    	$appointment->cus_gender = $request->cus_gender;
    	$appointment->cus_email = $request->cus_email;
    	$appointment->cus_phone = $request->cus_phone;
    	$appointment->brand_id = $request->brand;
    	$appointment->app_service = $request->service;
    	$appointment->date = $request->date;
    	$appointment->note = $request->note;

    }
}
