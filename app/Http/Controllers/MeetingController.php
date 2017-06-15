<?php

namespace IMTPMD\Http\Controllers;

use IMTPMD\Http\Controllers\Controller;
use IMTPMD\Models\Meeting;

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
     * @return Response
     */
    public function store()
    {

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