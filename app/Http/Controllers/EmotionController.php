<?php

namespace IMTPMD\Http\Controllers;

use IMTPMD\Http\Controllers\Controller;
use IMTPMD\Models\Emotion;

class EmotionController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return response(Emotion::all());
    }

    /**
     * Display the specified resource.
     *
     * @param Emotion $emotion
     * @return Response
     */
    public function show(Emotion $emotion)
    {
        return response($emotion);
    }
}