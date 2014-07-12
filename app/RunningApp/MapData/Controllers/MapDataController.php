<?php namespace RunningApp\MapData\Controllers;

use BaseController;
use RunningApp\Models\RunData;
use View;
use File;
use Formatter;

class MapDataController extends BaseController
{

    protected $runData;

    public function __construct(RunData $runData)
    {
        $this->runData = $runData;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $file = File::get('./public/gpx/activity_530174134.gpx');
        $xmlArray = Formatter::make($file, 'xml')->to_array();
        $mapData = array_get($xmlArray, 'trk.trkseg.trkpt');

        $finalData = [];
        foreach ($mapData as $lineData) {
            $flatLine = array_flatten($lineData);
            array_push($finalData, ['lon' => $flatLine[0], 'lat' => $flatLine[1]]);
        }

        return View::make('index')
            ->with('mapData', $finalData);
    }

    public function create()
    {
        return View::make('index');
    }
}
