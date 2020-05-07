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
        'users' => 'UserController',
        'employees' => 'EmployeeController',
        'departments' => 'DepartmentController',
        'designations' => 'DesignationController',
        'projects' => 'ProjectController',
        'projectusers' =>'ProjectUserController',
        'companies' => 'CompanyController',
        'tasks' => 'TaskController',

    /**
     * Item Routes
     */
        'items' => 'ItemController',
        'itemCategories' => 'ItemCategoryController',
        'itemModels' => 'ItemModelController',
        'processors' => 'ProcessorController',
        'supplierCategories' => 'SupplierCategoryController',
        'suppliers' => 'SupplierController',
        'batches'=> 'BatchController',

]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
