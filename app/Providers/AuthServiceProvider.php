<?php

namespace App\Providers;

 use App\CashCollection;
use App\CashDepositeSlip;
use App\Employee;
use App\Evend;
use App\Policies\CashCollectionPolicy;
use App\Policies\CashDepositePolicy;
use App\Policies\EmployeePolicy;
use App\Policies\EvendPolicy;
 use App\Traits\Authentication;
 use Illuminate\Auth\Access\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [

        /**
         * Register Policies defined in each Policy
         * Follow the Following CConventions to Register
         *
         * @App\Model => @App\Policy
         */

        Employee::class => EmployeePolicy::class,
        /**
         * @Evend and @Collection Policies and Modules
         */
         Evend::class => EvendPolicy::class,
         CashDepositeSlip::class => CashDepositePolicy::class,
         CashCollection::class => CashCollectionPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * @Defining Global Policies of the App  an then Use the
         *
         */

        $this->registerPolicies();

//             Gate::define('isAdministrator', function ($user){
//                 /**
//                  * Authenticate user, where the Role of the User is @Administrator
//                  */
//                  return $user -> role -> name == 'Administrator';
//              });
//
//             Gate::define('isUser', function ($user){
//                 /**
//                  * Authenticate user, where the Role of the User is @User
//                  */
//                 return $user -> role -> name == 'User';
//             });
//
//
//             Gate::define('isManager', function ($user){
//                 /**
//                  * Authenticate user, where the Role of the User is @@Manager
//                  */
//                 return $user -> role -> name == 'Manager';
//             });
//
//             Gate::define('isCollector', function ($user){
//                 /**
//                  * Authenticate user, where the Role of the User is @Collector
//                  */
//                    return $user -> role -> name == 'Collector';
//             });

    }



}
