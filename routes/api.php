<?php

use App\Http\Controllers\APIs\PatientController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get("/patients/get-patient-list", [PatientController::class, 'getPatientList']);
Route::get("/patients/get-patient-information", [PatientController::class, 'getPatientInformation']);


Route::post("/patients/save-patient-info", [PatientController::class, 'savePatientInfo']);
