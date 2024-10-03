<?php

namespace emielroelofsen\PackageTest\Listeners;

use App\Events\OrderShipped;
use Illuminate\Support\Facades\Log;

class HandleOrderShipped
{
    public function handle(OrderShipped $event)
    {
        Log::info('OrderShipped event caught by package-test.', ['order_id' => $event->order->id]);
    }
}
