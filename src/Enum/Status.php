<?php

namespace App\Enum;

enum Status: string
{
    case Active = 'active';
    case Disabled = 'disabled';
    case Banned = 'banned';
    case Pending = 'pending';

}
