<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$only = [
    'only' => [ 'index', 'store', 'show' ]
];

/*
 * User
 */
Route::resource('user', 'UserController', $only);
Route::post('user/login', 'UserController@login')->name('user.login');

/*
 * Meeting
 */
Route::resource('meeting', 'MeetingController', $only);

/*
 * Feedback
 */
Route::resource('feedback', 'FeedbackController', $only);

/*
 * Emotion
 */
Route::resource('emotion', 'EmotionController', [
    'only' => ['index', 'show']
]);
