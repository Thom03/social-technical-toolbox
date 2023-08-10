<?php

namespace App\Listeners;

use App\Events\UpdateCoordinatesEvent;
use App\Models\AdministrativeBoundary;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class UpdateCoordinatesListener implements ShouldQueue
{
    use InteractsWithQueue;

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
     * @param  object  $event
     * @return void
     */
    public function handle(UpdateCoordinatesEvent $event)
    {
        $countryId = $event->countryId;
        $response = Http::get("https://ramses.ciat.cgiar.org/api/v1/countries/{$countryId}/geojson/polygons");

        $data = json_decode($response->getBody(), true);

        if (isset($data['geometry']['coordinates'])) {
            $geometryType = $data['geometry']['type'];
            $coordinates = $data['geometry']['coordinates'];

            $geometry = [
                'type' => $geometryType,
                'coordinates' => $coordinates,
            ];

            AdministrativeBoundary::where('country_id', $countryId)->update([
                'coordinates' => DB::raw("ST_GeomFromGeoJSON('".json_encode($geometry)."')"),
            ]);

            Log::info('Coordinates updated successfully for country ID: ' . $countryId);
        } else {
            Log::error('Coordinates data not found for country ID: ' . $countryId);
            // Handle the case where 'coordinates' key is missing or not structured as expected
            // You might want to log an error or take appropriate action here
        }
    }
}
