<?php

namespace App\Enums;

enum TicketStatus: int
{
    case WAITING = 1;
    case IN_PROGRESS = 2;
    case DONE = 3;
    case NO_ANSWER = 4;
    case CANCELED = 5;
    case DELETED = 6;

    public function getStatusText(): String
    {
        return match ($this) {
            self::WAITING => 'Waiting',
            self::IN_PROGRESS => 'In Progress',
            self::DONE => 'Done',
            self::NO_ANSWER => 'No Answer',
            self::CANCELED => 'Canceled',
            self::DELETED => 'Deleted',
        };
    }
}
