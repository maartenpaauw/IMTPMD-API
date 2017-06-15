<?php

namespace IMTPMD\Http\Controllers;

use Illuminate\Http\Request;
use IMTPMD\Http\Controllers\Controller;
use IMTPMD\Models\Feedback;

class FeedbackController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return response(Feedback::all());
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
     * @param Feedback $feedback
     * @return Response
     * @internal param int $id
     */
    public function show(Feedback $feedback)
    {
        return response($feedback);
    }
}