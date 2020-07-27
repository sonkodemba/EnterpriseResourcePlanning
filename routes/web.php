<?php

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
// Route::get('/emails', function(){
//     return view('emails.users.welcome');
// });

Route::get('/', function () {
    return view('auth.login');
 });

Route::resources([
    /**
     * @Employee and @user
     */
        'users' => 'UserController',
        'usercategories' => 'UserCategoryController',
        'employees' => 'EmployeeController',
        'educations'=> 'EmployeeEducationController',
        'categories' => 'EmploymentCategoryController',


    /**
     * @Evending_System
     */
        'evends' => 'EvendController',
        'serviceCharges' => 'EvendServiceChargeController',
        'endOfDays' => 'EvendEndOfDayController',
        'cashDeposites' => 'CashDepositeSlipController',
        'cashCollections' =>'CashCollectionController',

    /**
     * Route for The @Banks
     */
        'banks' => 'BankController',
]);

/**
 * custom Routes
 */


 Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
