<?php

namespace App\Providers;

use App\Events\BatchCreatedEvent;
use App\Events\CashDepositedEvent;
use App\Events\DepartmentCreatedEvent;
use App\Events\DesignationCreatedEvent;
use App\Events\EmployeeCreatedEvent;
use App\Events\EmployeeEducationCreatedEvent;
use App\Events\EvendCreatedEvent;
use App\Events\ItemCategoryCreatedEvent;
use App\Events\ItemEmployeeCreatedEvent;
use App\Events\ItemModelCreatedEvent;
use App\Events\ProcessorCreatedEvent;
use App\Events\SupplierCategoryCreatedEvent;
use App\Events\SupplierCreatedEvent;
use App\Events\UserRegistrationEvent;
use App\Listeners\BatchCreatedListener;
use App\Listeners\CashDepositedListener;
use App\Listeners\DepartmentCreatedListener;
use App\Listeners\DesignationCreatedListener;
use App\Listeners\EmployeeCreatedListener;
use App\Listeners\EmployeeEducationCreatedListener;
use App\Listeners\EvendCreatedListener;
use App\Listeners\ItemCategoryCreatedListener;
use App\Listeners\ItemEmployeeCreatedListener;
//use App\Listeners\ItemEmployeeSupplierNotification;
use App\Listeners\ItemModelCreatedListener;
use App\Listeners\LogLockout;
use App\Listeners\LogSuccessfulLogout;
use App\Listeners\ProcessorCreatedListener;
use App\Listeners\SupplierCategoryCreatedListener;
use App\Listeners\SupplierCreatedListener;
use App\Listeners\UserRegistrationListener;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        Login::class => [
            /**
             * 'Illuminate\Auth\Events\Login' => ['App\Listeners\LogSuccessfulLogin',],
             */
        ],
        Logout::class => [
            /**
             * 'Illuminate\Auth\Events\Logout' => ['App\Listeners\LogSuccessfulLogout',],
             */
            LogSuccessfulLogout::class
        ],

        LogLockout::class =>[
            /**
             * 'Illuminate\Auth\Events\Lockout' => ['App\Listeners\LogLockout', ],
             */
            LogLockout::class,
        ],

//        Attempting::class =>[
//            /**
//             *  'Illuminate\Auth\Events\Attempting' => ['App\Listeners\LogAuthenticationAttempt'],
//            */
//            LogAuthenticationAttempt::class
//        ],

        UserRegistrationEvent::class =>[
            /**
             * 'App\Events\UserRegistrationEvent' =>[ 'App\Listeners\UserRegistrationListener'],
             */
            UserRegistrationListener::class,
        ],

        BatchCreatedEvent::class => [
            /**
             * 'App\Events\BatchCreatedEvent' =>[ 'App\Listeners\BatchCreatedListener'],
             */
            BatchCreatedListener::class
        ],

        DepartmentCreatedEvent::class => [
            /**
             * 'App\Events\DepartmentCreatedEvent' =>['App\Listeners\DepartmentCreatedListener']
             */
          DepartmentCreatedListener::class
        ],

        DesignationCreatedEvent::class =>[
            /**
             * 'App\Events\DesignationCreatedEvent' =>[ 'App\Listeners\DesignationCreatedListener'],
             */
            DesignationCreatedListener::class
        ],


        EmployeeCreatedEvent::class =>[
            /**
             *  'App\Events\EmployeeCreatedEvent' => ['App\Listeners\EmployeeCreatedListener],
             */
            EmployeeCreatedListener::class,
        ],

        EmployeeEducationCreatedEvent::class =>[
            /**
             *  'App\Events\EmployeeCreatedEvent' => ['App\Listeners\EmployeeEducationCreatedListener']
             */
          EmployeeEducationCreatedListener::class,
        ],


        ItemCategoryCreatedEvent::class =>[
            /**
             * 'App\Events\ItemCategoryCreatedEvent'  => ['App\Listeners\ItemCategoryCreated'],
             */
            ItemCategoryCreatedListener::class,
        ],

        ItemEmployeeCreatedEvent::class =>[
            /**
             * @Note:
             *      Do The Following When This Event is Triggered:
             *      Send Email To the Employee /Staff That his Item Assigned to Him.
             *
             *   'App\Events\ItemEmployeeCreatedEvent' =>['App\Listeners\ItemEmployeeCreatedListener']
             *
             */
                    ItemEmployeeCreatedListener::class,
                    /**
                     * Trigger the @Email and Send to Employee Assigned the Particular @item.
                     *  1 -> Send Email to the Employee that the Item is Assigned to Him/Her
                     *
                     */


        ],

        ItemModelCreatedEvent::class =>[
            /**
             *  'App\Events\ItemModelCreatedEvent' =>['App\Listeners\ItemModelCreatedListener'],
             */
            ItemModelCreatedListener::class
        ],

        ProcessorCreatedEvent::class => [
            /**
             * 'App\Events\ProcessorCreatedEvent' =>['App\Listeners\ProcessorCreatedListener'],
             */
            ProcessorCreatedListener::class,
        ],

        SupplierCategoryCreatedEvent::class =>[
            /**
             * 'App\Events\SupplierCategoryCreatedEvent' =>['App\Listeners\SupplierCategoryCreatedListener'],
             * @Notice that there can be More Listeners, it Depends on the Logical Structures of The Program.
             */
            SupplierCategoryCreatedListener::class,
        ],

        SupplierCreatedEvent::class =>[
            SupplierCreatedListener::class,
        ],
        CashDepositedEvent::class =>[
                CashDepositedListener::class
            ],

        EvendCreatedEvent::class => [
            EvendCreatedListener::class
        ],



    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
