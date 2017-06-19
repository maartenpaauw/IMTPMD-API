<?php

namespace IMTPMD\Http\Controllers;

use Illuminate\Http\Request;
use IMTPMD\Models\User;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {
        return response(User::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function store(Request $request)
    {
        $user = User::create($request->all());
        return response($user);
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @internal param int $id
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function show(User $user)
    {
        return response($user);
    }

    /**
     * Login a user.
     *
     * @param Request $request
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function login (Request $request) {
        $user = User::firstOrCreate($request->all());
        return response($user);
    }
}