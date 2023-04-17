<?php

namespace Modules\GolfBooking\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;
use Modules\GolfBooking\Http\Requests\CreateTeeboxRequest;
use Modules\GolfBooking\Models\Teebox;

class ManageBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $teeboxes = Teebox::all();

        return view('golfbooking::manage-booking-golf.index', compact(
            'teeboxes'
        ));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('golfbooking::manage-booking-golf.modal.create-teebox');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CreateTeeboxRequest $request)
    {
        Teebox::create($request->all());

        return redirect()->back()->with('success', 'Tee box successfully created');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('golfbooking::manage-booking-golf.modal.edit-teebox');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
       $teebox = Teebox::find($id)->first();

        return view('golfbooking::manage-booking-golf.modal.edit-teebox', compact(
            'teebox'
        ));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        Teebox::find($id)->update($request->all());

        return redirect()->back()->with('success', 'Teebox successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Teebox $teebox)
    {
        Teebox::find($teebox->id)->delete();

        return redirect()->back()->with('success', 'Teebox successfully deleted');
    }
}
