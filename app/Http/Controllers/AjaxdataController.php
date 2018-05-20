<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;


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
        DB::table('patients')->where('patient_name', "$patient_name")->update([
         'svg' => "$svg"
        ])
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

    $patient = DB::table('patients')->select('svg')->->where('patient_name', '=', "$patient_name")->get()
    return $patient[0]->svg
}
}
