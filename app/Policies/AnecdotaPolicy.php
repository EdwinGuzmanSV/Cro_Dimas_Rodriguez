<?php

namespace App\Policies;

use App\User;
use App\Anecdota;
use Illuminate\Auth\Access\HandlesAuthorization;

class AnecdotaPolicy
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

    public function pass(User $user, Anecdota $anecdota)
    {
        return $user->id == $anecdota->user_id;
    }
}
