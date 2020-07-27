<?php

namespace App\Policies;

use App\EvendEndOfDay;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EndOfdayPolicy
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
     * @param  \App\EvendEndOfDay  $evendEndOfDay
     * @return mixed
     */
    public function view(User $user, EvendEndOfDay $evendEndOfDay)
    {
        return  in_array($user -> role -> name,['Administrator','User']);
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
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\EvendEndOfDay  $evendEndOfDay
     * @return mixed
     */
    public function update(User $user, EvendEndOfDay $evendEndOfDay)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\EvendEndOfDay  $evendEndOfDay
     * @return mixed
     */
    public function delete(User $user, EvendEndOfDay $evendEndOfDay)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\EvendEndOfDay  $evendEndOfDay
     * @return mixed
     */
    public function restore(User $user, EvendEndOfDay $evendEndOfDay)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\EvendEndOfDay  $evendEndOfDay
     * @return mixed
     */
    public function forceDelete(User $user, EvendEndOfDay $evendEndOfDay)
    {
        //
    }
}
