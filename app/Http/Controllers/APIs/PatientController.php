<?php

namespace App\Http\Controllers\APIs;

use App\Models\UHispatient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

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

        // dd($request->all());

        $searchCols = [
            'CODE',
            'U_LASTNAME',
            'U_FIRSTNAME',
            'U_MIDDLENAME',
        ];
        $searchString = '%' . $request->search . '%';


        $patients = DB::table('u_hispatients')->select(
            'CODE',
            'U_LASTNAME',
            'U_FIRSTNAME',
            'U_MIDDLENAME',
            'U_BIRTHDATE',
            'U_GENDER',
            'U_EXTNAME',
            'U_VISITCOUNT',
        )
            ->when($request->search !== null, function ($query) use ($searchCols, $searchString) {
                foreach ($searchCols as $key => $col) {
                    if ($key === 0) {
                        $query->where($col, 'like',  $searchString);
                    } else {
                        $query->orwhere($col, 'like',  $searchString);
                    }
                }
            })

            ->orderBy($request->sortCol, $request->sortDir)
            ->paginate(15);

        return response()->json([
            'patients' => $patients
        ]);
    }

    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @param Type $var Description
     * @return type
     * @throws conditon
     **/
    public function getPatientInformation(Request $request)
    {
        # code...
        // dd($request->all());

        try {
            $infoPatient = DB::table('u_hispatients')->select([
                'CODE',
                'U_LASTNAME',
                'U_FIRSTNAME',
                'U_MIDDLENAME',
                'U_BIRTHDATE',
                'U_GENDER',
                'U_EXTNAME',
                'U_VISITCOUNT',
                'U_OCCUPATION',
                'U_NATIONALITY',
                'U_RELIGION'
            ])->where('CODE', $request->mrn)->first();

            return response()->json([
                'infoPatient' => $infoPatient
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    public function savePatientInfo(Request $request)
    {
        # code...
        // dd($request->all());


        try {
            $data = [];
            switch ($request->action) {
                case 'view':
                    // $id =    DB::table('u_hispatients')->select('id')->where('CODE', $request->data['CODE'])->first();
                    // $CODE = '2025-000003';

                    $data = $request->data;
                    // $data['CODE'] = $CODE;
                    // UHispatient::create($data);
                    DB::table('u_hispatients')->where('CODE', $request->data['CODE'])->update($request->data);
                    // dd($id);
                    throw new \Exception('saved');
                    break;

                default:
                    # code...
                    break;
            }
            // UHispatient::

            return response()->json([
                'success' => true
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
