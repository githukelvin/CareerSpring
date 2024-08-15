<?php

namespace App\Enums;

enum UserRole: string
{
    case Student = 'Student';
    case Coordinator = 'Coordinator';
    case Lecturer = 'Lecturer';
    case Director = 'Director';


    public static function random(): self
    {
        return self::cases()[array_rand(self::cases())];
    }
}
