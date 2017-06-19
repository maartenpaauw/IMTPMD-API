<?php

namespace IMTPMD\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use IMTPMD\Http\Controllers\Controller;
use IMTPMD\Models\Meeting;
use IMTPMD\Models\User;

class MeetingController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return response(Meeting::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        // Get the data.
        $user        = User::where('number', $request->get('number'))->first();
        $name        = $request->get('name');
        $description = $request->get('description');

        // TODO fix this.
        $starting_at = Carbon::now();
        $ending_at   = Carbon::now();

        // Meeting
        $meeting = Meeting::create([
            'user_id'     => $user->id,
            'name'        => $name,
            'description' => $description,
            'starting_at' => $starting_at,
            'ending_at'   => $ending_at
        ]);

        // Return the meeting.
        return response($meeting);
    }

    /**
     * Display the specified resource.
     *
     * @param Meeting $meeting
     * @return Response
     * @internal param int $id
     */
    public function show(Meeting $meeting)
    {
        return response($meeting);
    }
}