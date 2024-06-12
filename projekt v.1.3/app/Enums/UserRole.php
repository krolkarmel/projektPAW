<?php

namespace App\Enums;

class UserRole
{
    const ADMIN = 'admin';
    const USER = 'user';
    const WORKER = 'worker';

    const GUEST = 'guest';
     
    const TYPES = [
        self::ADMIN,
        self::WORKER,
        self::USER,
        self::GUEST
    ];
}
