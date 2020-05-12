<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
+--------------------------------------------------------------------------
| Web Routes
+--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resources([
    /**
     * Employee Routes
     */
        'users' => 'UserController',
        'employees' => 'EmployeeController',
        'educations'=> 'EmployeeEducationController',
        'departments' => 'DepartmentController',
        'designations' => 'DesignationController',

    /**
     * Project Routes
     */
        'projects' => 'ProjectController',
        'projectusers' =>'ProjectUserController',
        'companies' => 'CompanyController',
        'tasks' => 'TaskController',


    /**
     * Item Routes
     */
        'items' => 'ItemController',
        'itemcategories' => 'ItemCategoryController',
        'itemmodels' => 'ItemModelController',
        'processors' => 'ProcessorController',
        'suppliercategories' => 'SupplierCategoryController',
        'suppliers' => 'SupplierController',
        'batches'=> 'BatchController',

]);

/**
 * custom Routes
 */


 Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
