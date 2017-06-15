<?php

namespace IMTPMD\Http\Controllers;

use Illuminate\Http\Request;
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
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $meeting = Meeting::create($request->all());
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