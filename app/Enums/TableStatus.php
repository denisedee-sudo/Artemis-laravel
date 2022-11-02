<?php

namespace App\Enums;

enum TableStatus: string
{
    case Pending = 'pending';
    case Available = 'avaliable';
    case Unavailable = 'unavaliable';
}

// enum TableStatus: string
// {
//     case Pending = 'pending';
//     case Avalaiable = 'avaliable';
//     case Unavaliable = 'unavaliable';
// }

// enum TableStatus: string
// {
//     case Pending = 'pending';
//     case Available = 'available';
//     case Unavailable = 'unavailable';
// }
