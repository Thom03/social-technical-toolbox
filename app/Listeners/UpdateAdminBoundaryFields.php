<?php

namespace App\Listeners;

use App\Events\AdminBoundariesUpdated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateAdminBoundaryFields
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\AdminBoundariesUpdated  $event
     * @return void
     */
    public function handle(AdminBoundariesUpdated $event)
    {
        //

    }
}
