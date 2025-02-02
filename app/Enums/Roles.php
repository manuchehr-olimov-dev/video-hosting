<?php

namespace App\Enums;

enum Roles: string
{
    case ADMIN = 'admin';
    case MODERATOR = 'moderator';
    case USER = 'user';

    public function getPermissions(): array
    {
        return match ($this) {
            self::ADMIN => self::adminPermissions(),
            self::MODERATOR => self::moderatorPermissions(),
            self::USER => self::userPermissions(),
            default => []
        };
    }

    private function adminPermissions(): array
    {
        return Permissions::cases();
    }

    private function moderatorPermissions(): array
    {
        return [
            Permissions::CAN_EDIT_USER,
            Permissions::CAN_DELETE_USER,
            Permissions::CAN_ADD_VIDEO,
            Permissions::CAN_EDIT_VIDEO,
            Permissions::CAN_DELETE_VIDEO,
        ];
    }

    private function userPermissions(): array{
        return [];
    }
}
