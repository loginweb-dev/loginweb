<?php

namespace App\Policies;

use App\Models\Asiento;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AsientoPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability){

        if ($user->isAdmin()) {
            return true;
        }

    }
    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user, Asiento $asiento)
    {
        return ($user->id === $asiento->user_id) || $user->hasPermission('browse_asientos');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Asiento  $asiento
     * @return mixed
     */
    public function view(User $user, Asiento $asiento)
    {
        return ($user->id === $asiento->user_id) || $user->hasPermission('read_asientos');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermission('add_asientos');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Asiento  $asiento
     * @return mixed
     */
    public function update(User $user, Asiento $asiento)
    {
        return ($user->id === $asiento->user_id) || $user->hasPermission('edit_asientos');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Asiento  $asiento
     * @return mixed
     */
    public function delete(User $user, Asiento $asiento)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Asiento  $asiento
     * @return mixed
     */
    public function restore(User $user, Asiento $asiento)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Asiento  $asiento
     * @return mixed
     */
    public function forceDelete(User $user, Asiento $asiento)
    {
        //
    }

    public function acciones(User $user)
    {
        return $user->hasRole('gerente');
    }
}
