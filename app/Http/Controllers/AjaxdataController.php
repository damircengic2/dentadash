<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;

class AjaxdataController extends Controller
{
    //
    
    function patientChartPost(Request $request) {
 /* this validates the input */
    $validation = Validator::make($request->all(), [
        'patient_name' => 'required',
        'svg'  => 'required',
    ]);
    
    $error_array = array();
    $success_output = '';
    if ($validation->fails())
    {
        foreach ($validation->messages()->getMessages() as $field_name => $messages)
        {
            $error_array[] = $messages; 
        }
    }
    else
    {
        $patient_name = $request->get('patient_name');
        $svg = $request->get('svg');
	DB::table('patients')->where('Fname', "$patient_name")->update([
         'svg' => "$svg"
        ]);
        $success_output = 'Patient data saved';
    }
    
    $output = array(
        'error'     =>  $error_array,
        'success'   =>  $success_output
    );
    echo json_encode($output);
}

function patientChartGet(Request $request)
{
 /* this validates the input */
    $validation = Validator::make($request->all(), [
        'patient_name' => 'required'
    ]);

    $error_array = array();
    $success_output = '';
    if ($validation->fails())
    {
        foreach ($validation->messages()->getMessages() as $field_name => $messages)
        {
            $error_array[] = $messages;
        }
    }
    else
    {
	    $patient_name = $request->get('patient_name');

	    $patient = DB::table('patients')->select('svg')->where('Fname', '=', "$patient_name")->get();
	    if (count($patient) == 0) {
		array_push($error_array, "No patient found");
	    } else {
		$success_output = $patient[0]->svg;
	    };
    } 
    $output = array(
        'error'     =>  $error_array,
        'success'   =>  $success_output
    );

    return $output;
}
}
