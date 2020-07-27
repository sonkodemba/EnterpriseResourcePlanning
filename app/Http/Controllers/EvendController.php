<?php

namespace App\Http\Controllers;

use App\Evend;
use App\Events\DepartmentCreatedEvent;
use App\Events\EvendCreatedEvent;
use App\Http\Requests\EvendFormRequest;
use Carbon\Carbon;
use Faker\Generator;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Faker\Generator as faker;

class EvendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
         $evends = Evend::latest()-> paginate(4);
         return  view('cashpower.evends.index', compact('evends'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return  view('cashpower.evends.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param EvendFormRequest $request
     * @param Evend $evend
     * @return RedirectResponse
     * @throws AuthorizationException
     */
    public function store(EvendFormRequest $request, Evend $evend)
    {
        $this->authorize('create', Evend::class);

        $user =  Auth::user();
        $evend -> user_id = $user -> staff_id;
        $num=$evend -> meter_num = $request['meter_num'];
        $evend -> meter_name = \Illuminate\Support\Str::random(5);
        $evend -> generated_token = rand();
        $amount = $evend -> amount = $request['amount'];
        $evend -> payment_type = $request['options'];
        if ($amount >= 50 && $amount <= 99){
            $evend -> transaction_Fee = 3.00;
            $evend -> eSMS_receipt_Fee = 1.00;
            $evend -> share = ($evend -> transaction_Fee + $evend -> eSMS_receipt_Fee) / 2;
        }
        elseif ($amount >=100 && $amount <=199){
            $evend -> transaction_Fee = 4.00;
            $evend -> eSMS_receipt_Fee = 1.00;
            $evend -> share = ($evend -> transaction_Fee + $evend -> eSMS_receipt_Fee) / 2;
        }
        $saved = $evend -> save();
        if ($saved){
            /**
             * Send Email and Sms to the User
             */

//            event(new EvendCreatedEvent($evend -> user_id,
//                                        $evend -> meter_num,
//                                       $evend -> meter_name,
//                                       $evend -> amount));

            /**
             * Send Request to the @Suprima Server
             */
                return redirect() ->route('evends.index') -> with('success',$num.' Vended Successfully');
        }
       else{
           return redirect() ->route('evends.index') -> with('error',$num.' Error Vending, please check meter number');
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evend  $evend
     * @return Application|Factory|View
     */
    public function show(Evend $evend)
    {
//        $this->authorize('view', $evend);
        return \view('cashpower.evends.show', compact('evend'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evend  $evend
     * @return Response
     */
    public function edit(Evend $evend)
    {
        /**
         * Only @Administrator is Authorized to Do this Action
         * If it Exist
         */
        $this->authorize('edit',$evend);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param \App\Evend $evend
     * @return void
     * @throws AuthorizationException
     */
    public function update(Request $request, Evend $evend)
    {
        /**
         * Only @Administrator is Authorized to Update
         */
        $this->authorize('update', $evend);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Evend $evend
     * @return void
     * @throws AuthorizationException
     */
    public function destroy(Evend $evend)
    {
        $this->authorize('delete', $evend);
        /**
         * Do nothing
         */
    }
}
