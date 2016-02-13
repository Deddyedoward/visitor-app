<?php

namespace App\Events;

use App\Visitor;
use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class EmailSignup extends Event
{
    use SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }

    public function getData()
    {

      $visitor = Visitor::find($this->id);

      return [array(
          'name' => $visitor->name,
          'email' => $visitor->email,
          'phone' => $visitor->phone,
          'occupation' => $visitor->occupation
      )];

    }
}
