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
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        // Feedback ids.
        $feedback_ids = $request->only([
            'emotion_id',
            'meeting_id',
            'user_id'
        ]);

        // Create the feedback.
        $feedback = Feedback::firstOrCreate($feedback_ids);

        // Update the description.
        $feedback->description = $request->input('description');

        // Save it.
        $feedback->save();

        // Return it.
        return response($feedback);
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