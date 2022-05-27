<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class getNotify
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $title;
    public $orderId;
    public $driverId;

    public function __construct($title, $orderId, $driverId)
    {
        $this->title = $title;
        $this->orderId = $orderId;
        $this->driverId = $driverId;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return ['notify_channel_'.$this->driverId];
    }

    public function broadcastAs()
    {
        return 'getNotify';
    }
}
