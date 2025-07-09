<?php

namespace App\Http\Controllers\APIs;

use App\Http\Controllers\Controller;
use App\Models\UHispatient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a paginated list of patients.
     *
     * This method retrieves patients from the database and returns them
     * in a paginated JSON format, ordered by the most recently created.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getPatientList(Request $request)
    {
        $patients = UHispatient::latest()->paginate(15);

        return response()->json($patients);
    }
}
