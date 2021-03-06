<?php
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:api')->group(function (){
  Route::get('/user', function (Request $request) {
      return $request->user();
  });
  Route::get('/modules', 'ModuleController@index');
  Route::get('/project', 'ProjectController@index');
  Route::post('/logout', 'AuthController@logout');
  Route::get('/project/{project_id}/module/{module_id}', 'TaskController@getTasks');

  // Route::get('/project/{project_id}/module/{module_id}/task/{task_url}', 'TaskController@getTasks');
});

Route::post('/login', 'AuthController@login');
Route::post('/register', 'AuthController@register');
