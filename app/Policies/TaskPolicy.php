<?php

namespace App\Policies;

use Log;
use App\User;
use App\Task;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function destroy(User $user, Task $task)
    {
        Log::error('Current user id is '.$user->id);
        Log::error('Task owner id is '.$task->user_id);
        return $user->id === $task->user_id;
    }
}
