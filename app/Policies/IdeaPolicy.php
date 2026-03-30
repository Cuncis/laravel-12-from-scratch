<?php

namespace App\Policies;

use App\Models\Idea;
use App\Models\User;

class IdeaPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function update(User $user, Idea $idea) {
        return $user->id === $idea->user_id;
    }

    public function create(User $user) {
        return $user->isAdmin();
    }
}
