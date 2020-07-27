<?php

namespace App\Policies;

use App\Evend;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EvendPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param  \App\Evend  $evend
     * @return mixed
     */
    public function view(User $user, Evend $evend)
    {
        //
        return  in_array($user -> role -> name,['Administrator']);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {
        /**
         * The Following Users  are allowed to Vend
         * @Administrator and @user
         *
         */
        return in_array(
            $user -> role -> name ,[
                'Administrator',
                 'User'
            ]

        );
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param  \App\Evend  $evend
     * @return mixed
     */
    public function update(User $user, Evend $evend)
    {
        return $user -> role-> name == "Administrator";
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param  \App\Evend  $evend
     * @return mixed
     */
    public function delete(User $user, Evend $evend)
    {
        return in_array(
            $user -> role -> name, ['Administrator','Manager']
        );
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param User $user
     * @param  \App\Evend  $evend
     * @return mixed
     */
    public function restore(User $user, Evend $evend)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param User $user
     * @param  \App\Evend  $evend
     * @return mixed
     */
    public function forceDelete(User $user, Evend $evend)
    {
        //
    }
}
