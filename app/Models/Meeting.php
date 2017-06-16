<?php

namespace IMTPMD\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Meeting
 * @package IMTPMD\Models
 */
class Meeting extends Model
{
    /**
     * @var array
     */
    protected $dates = [
        'starting_at',
        'ending_at'
    ];

    /**
     * @var array
     */
    protected $fillable = [
        'user_id',
        'name',
        'description',
        'starting_at',
        'ending_at'
    ];

    /**
     * @var array
     */
    protected $with = [
        'feedback',
        'user'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function feedback ()
    {
        return $this->hasMany(Feedback::class, 'meeting_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user ()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}