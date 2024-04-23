<?php
namespace Farhat\Websocket\Events;
use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;
class CsvExportProgressEventt implements ShouldBroadcast
{
    use SerializesModels;
    public $name;
   
    public function __construct( $name)
    {
        $this->name = $name;
    }
    public function broadcastOn()
    {
        return new Channel('export-progress');
    }
   
}
