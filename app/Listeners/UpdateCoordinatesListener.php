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
        //
        $countryId = $event->countryId;
        $response = Http::get("https://ramses.ciat.cgiar.org/api/v1/countries/{$countryId}/geojson/polygons");

        $data = json_decode($response->getBody(), true);





        // Check if 'geometry' key and 'coordinates' key are present in the API response
        if (isset($data['geometry']['coordinates'])) {
            $coordinates = $data['geometry']['coordinates'];

            // Convert coordinates to MySQL polygon format
            $polygon = 'POLYGON((';
            foreach ($coordinates[0] as $point) { // Assuming that $coordinates is an array of arrays
                $polygon .= "{$point[0]} {$point[1]},";
            }
            $polygon = rtrim($polygon, ',') . '))';

            // Update the coordinates field in your table
            AdministrativeBoundary::where('country_id', $countryId)->update([
                'coordinates' => DB::raw("ST_GeomFromText('$polygon')"),
            ]);

            Log::info('Coordinates updated successfully for country ID: ' . $countryId);
        } else {
            Log::error('Coordinates data not found for country ID: ' . $countryId);
            // Handle the case where 'coordinates' key is missing or not structured as expected
            // You might want to log an error or take appropriate action here
        }
    }
}
