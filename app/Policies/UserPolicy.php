<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    public function isCoordinator(User $user): bool
    {
        return $user->role === 'Coordinator';
    }

    public function isLecturer(User $user): bool
    {
        return $user->role->value === 'Lecturer';
    }

    public function isDirector(User $user): bool
    {
        return $user->role->value === 'Director';
    }

    public function isStudent(User $user): bool
    {
        return $user->role->value === 'Student';
    }
}
