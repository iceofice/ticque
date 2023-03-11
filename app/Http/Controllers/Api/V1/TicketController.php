<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\NextTicketRequest;
use App\Http\Resources\V1\TicketResource;
use App\Models\Group;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function next(NextTicketRequest $request)
    {
        //TODO: Move into service/task
        $group = Group::with('tickets')->find($request->group_id);
        $last_ticket = $group->tickets()->latest('id')->first();

        $ticket_number = is_null($last_ticket) ? 1 : $last_ticket->number + 1;

        $new_ticket = $group->tickets()->create([
            'number' => $ticket_number,
            'status' => 1
        ]);

        return new TicketResource($new_ticket);
    }
}
