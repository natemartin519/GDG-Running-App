<?php namespace RunningApp\RunData\Controllers;

use BaseController;
use RunData;
use View;

class RunDataController extends BaseController
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
        return View::make('index');
    }
}
