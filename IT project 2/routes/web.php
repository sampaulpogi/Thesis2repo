<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*ADMIN Routes*/
Auth::routes();

Route::get('/', function () {
    return view('login');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/PendingLeaves', 'HomeController@getPendingLeaves');
Route::get('/RandF', function () {
    return view('HR/RandF');
});
Route::get('/hrPlantilla', function () {
    return view('HR/hrPlantilla');
});
Route::get('/Employees', 'HomeController@getEmployees');
Route::get('/blank', function () {
    return view('HR/blank');
});
Route::get('/indexHR', function () {
    return view('indexHR');
});
Route::get('/EmpProf/{emp_id}', 'HomeController@getEmployeeProfile');



/*Employee Routes*/
Route::get('/indexEmp', function () {
    return view('indexEmp');
});
Route::get('/submit_pds', "PdsController@update");
Route::resource('/PdsOfEmp', 'PdsController');
Route::get('/pds_add_child', 'PdsController@prepAddChild');
Route::get('/empservrec', 'HomeController@getServiceRecord');
//Route::get('/empservrec', function () {
//    return view('Employee/empservrec');
//});
Route::get('/empleavesum', function () {
    return view('Employee/empleavesum');
});
Route::get('/empleaveform', function () {
    return view('Employee/empleaveform');
});

//Route::get('/download-pdf1/{emp_id}', 'Controller@getEmployees');

Route::get("/download-pdf1","Controller@downloadPDF1");

Route::get("/download-pdf2","Controller@downloadPDF2");

Route::get("/download-servicerecord1","Controller@downloadServiceRecord1");

Route::get("/download-servicerecord2","Controller@downloadServiceRecord2");

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');