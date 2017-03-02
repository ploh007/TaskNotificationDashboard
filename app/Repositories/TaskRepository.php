<?php

namespace App\Repositories;

use App\User;

class TaskRepository
{
    /**
     * Get all of the tasks for a given user and return the tasks based on the due date
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return $user->tasks()
                    ->orderBy('dueDate', 'asc')
                    ->get();
    }
}
