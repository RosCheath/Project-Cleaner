<?php

namespace App\Policies;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\User  $model
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Booking $booking)
    {
        return $user->role === 'Admin' || $user->id === $booking->user_id;
    }

    public function view_cleaner(User $user, Booking $booking)
    {
        return $user->role === 'Admin' || $user->id === $booking->cleaner_id;
    }

}
