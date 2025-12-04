<?php

namespace App\Enum;

enum UserRole: string
{
    case USER = 'ROLE_USER';
    case ADMIN = 'ROLE_ADMIN';
    case MANAGER = 'ROLE_MANAGER';
    case SUDO = 'ROLE_SUDO';

    public static function defaults(): array
    {
        return [self::USER];
    }

    public static function all(): array
    {
        return [
            self::USER,
            self::ADMIN,
            self::MANAGER,
            self::SUDO,
        ];
    }
}
