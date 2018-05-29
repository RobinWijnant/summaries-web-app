<?php

namespace App\Policies;

use App\User;
use App\Summary;
use Illuminate\Auth\Access\HandlesAuthorization;

class SummaryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the summary.
     *
     * @param  \App\User  $user
     * @param  \App\Summary  $summary
     * @return mixed
     */
    public function view(User $user, Summary $summary)
    {
        //
    }

    /**
     * Determine whether the user can create summaries.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the summary.
     *
     * @param  \App\User  $user
     * @param  \App\Summary  $summary
     * @return mixed
     */
    public function update(User $user, Summary $summary)
    {
        return $user->id === $summary->user->id;
    }

    /**
     * Determine whether the user can delete the summary.
     *
     * @param  \App\User  $user
     * @param  \App\Summary  $summary
     * @return mixed
     */
    public function delete(User $user, Summary $summary)
    {
        return $user->id === $summary->user->id;
    }
}
