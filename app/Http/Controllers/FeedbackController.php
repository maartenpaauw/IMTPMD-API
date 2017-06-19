<?php

namespace IMTPMD\Http\Controllers;

use Illuminate\Http\Request;
use IMTPMD\Models\Feedback;
use IMTPMD\Models\User;

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

        // Get all the information.
        $user = User::where('number', $request->get("number"))->first();

        // Create the feedback.
        $feedback = Feedback::firstOrCreate([
            'meeting_id' => $request->get("meeting_id"),
            'user_id'    => $user->id
        ]);

        // Attach the emotion.
        $feedback->emotion_id = $request->get("emotion_id");

        // Update the description.
        $feedback->description = $request->input('description');

        // Save it.
        $feedback->save();

        // Return the feedback.
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