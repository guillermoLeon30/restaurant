<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
//use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use App\Models\Local;
use App\Http\Resources\Menu as MenuResource;

class ditrubComida implements ShouldBroadcastNow
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
    return new Channel('local'.$this->local->id);
  }

  /**
 * Get the data to broadcast.
 *
 * @return array
 */
  public function broadcastWith(){
    $menus = $this->local->menus()->wherePivot('id_estado', 1)->get();
    return ['menus' => $menus->transform(function ($menu, $key){
      return new MenuResource($menu);
    })];
  }
}
