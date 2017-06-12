<?php

namespace App\Repositories;

use App\User;

class GroupRepository
{
    /**
     * Get all of the groups for a given user and return the groups based on the id
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return $user->groups()
                    ->orderBy('id', 'asc')
                    ->get();
    }
}
