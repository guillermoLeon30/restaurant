<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Models\Local;

class ditrubComida implements ShouldBroadcast
{
  use Dispatchable, InteractsWithSockets, SerializesModels;

  public $local;

  /**
   * Create a new event instance.
   *
   * @return void
   */
  public function __construct(Local $local){
    $this->local = $local;
  }

  /**
   * Get the channels the event should broadcast on.
   *
   * @return \Illuminate\Broadcasting\Channel|array
   */
  public function broadcastOn(){
    return new PrivateChannel('local'.$this->id);
  }
}
