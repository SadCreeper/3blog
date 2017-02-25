<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\User;

class UserPolicy
{
    use HandlesAuthorization;

    public function isMe(User $currentUser, User $user)
    {
        return $currentUser->id === $user->id;
    }
}
