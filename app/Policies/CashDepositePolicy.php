<?php

namespace App\Policies;

use App\CashDepositeSlip;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CashDepositePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\CashDepositeSlip  $cashDepositeSlip
     * @return mixed
     */
    public function view(User $user, CashDepositeSlip $cashDepositeSlip)
    {
//        return $user -> role -> name == 'Administrator' || $user -> role -> name == 'Collector';
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
//         return $user -> role -> name == 'Administrator' || $user -> role -> name == 'Collector';
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\CashDepositeSlip  $cashDepositeSlip
     * @return mixed
     */
    public function update(User $user, CashDepositeSlip $cashDepositeSlip)
    {
        //
//         return $user -> role -> name == 'Administrator';
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\CashDepositeSlip  $cashDepositeSlip
     * @return mixed
     */
    public function delete(User $user, CashDepositeSlip $cashDepositeSlip)
    {
        //
//        return $user -> role -> name == 'Administrator' ;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\CashDepositeSlip  $cashDepositeSlip
     * @return mixed
     */
    public function restore(User $user, CashDepositeSlip $cashDepositeSlip)
    {
        //
//        return $user -> role -> name == 'Administrator' ;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\CashDepositeSlip  $cashDepositeSlip
     * @return mixed
     */
    public function forceDelete(User $user, CashDepositeSlip $cashDepositeSlip)
    {
        //
//        return $user -> role -> name == 'Administrator';
    }
}
