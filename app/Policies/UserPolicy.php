<?php

namespace App\Policies;

use App\Http\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;


    public function before($user, $ability)
    {
        if ($user->hasRole('superadmin') || $user->hasPermission('users_module')) {
            return true;
        }
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Http\Models\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function view(User $user)
    {
        if ($user->hasPermission('view_users')) {
            return true;
        }

        return abort(403, 'Access denied message.');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Http\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        if ($user->hasPermission('create_users')) {
            return true;
        }

        return abort(403, 'Access denied message.');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Http\Models\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function update(User $user)
    {
        if ($user->hasPermission('update_users')) {
            return true;
        }

        return abort(403, 'Access denied message.');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Http\Models\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function delete(User $user)
    {
        if ($user->hasPermission('delete_users')) {
            return true;
        }

        return abort(403, 'Access denied message.');
    }
}