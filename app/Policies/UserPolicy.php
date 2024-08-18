<?php

namespace App\Policies;

use App\Enums\UserRole;
use App\Models\User;

class UserPolicy
{
    public function isCoordinator(User $user): bool
    {
        logger('Checking role for coordinator: ' . $user->role->value);
        return $user->role->value === UserRole::Coordinator->value;
    }

    public function isLecturer(User $user): bool
    {
        logger('Checking role for lecturer: ' . $user->role->value);
        return $user->role->value === UserRole::Lecturer->value;
    }

    public function isDirector(User $user): bool
    {
        logger('Checking role for director: ' . $user->role->value);
        return $user->role->value === UserRole::Director->value;
    }

    public function isStudent(User $user): bool
    {
        logger('Checking role for student: ' . $user->role->value);
        return $user->role->value === UserRole::Student->value;
    }
}
