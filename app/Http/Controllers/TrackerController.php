<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Tracker;
use Illuminate\Http\Request;

class TrackerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      \EasyPost\EasyPost::setApiKey(env('EASYPOST_API_KEY'));

          $tracker = \EasyPost\Tracker::all();
          Return view('tracker')->with('tracker', $tracker);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      \EasyPost\EasyPost::setApiKey(env('EASYPOST_API_KEY'));

try {
    $tracker = \EasyPost\Tracker::retrieve(array(
    "id" => $request->tracking_code,
     // "options" => array("residential_to_address" => 1),
   ));
   return redirect()->route('tracker.show', $request->tracking_code)->with('tracker', $tracker);

  // dd($shipment);
  // print_r($shipment->rates);
} catch (\Exception $e) {
  dd($e);

}


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tracker  $tracker
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      \EasyPost\EasyPost::setApiKey(env('EASYPOST_API_KEY'));
      $tracker = \EasyPost\Tracker::retrieve(array(
      "id" => $id,
       // "options" => array("residential_to_address" => 1),
     ));
     // $maindate = new Carbon ($tracker->created_at);
     // dd($tracker);
        Return view('tracker')->with('id', $id)->with('tracker', $tracker);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tracker  $tracker
     * @return \Illuminate\Http\Response
     */
    public function edit(Tracker $tracker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tracker  $tracker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tracker $tracker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tracker  $tracker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tracker $tracker)
    {
        //
    }
}
