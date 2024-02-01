<?php

namespace App\Enums;

use App\Traits\EnumHelper;

enum ReligionEnum: string
{
    use EnumHelper;

    case ISLAM = "islam";
    case KRISTEN = "kristen";
    case BUDDHA = "buddha";
    case HINDU = "hindu";
    case KONGHUCU = "konghucu";
}
