<?php

namespace App\Enums;

use App\Traits\EnumHelper;

enum StudentStatusEnum: string
{
    use EnumHelper;

    case PENDING = "pending";
    case ACCEPTED = "accepted";
    case REJECTED = "rejected";
}
