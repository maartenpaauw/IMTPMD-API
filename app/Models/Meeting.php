<?php

namespace IMTPMD\Models;

use Illuminate\Database\Eloquent\Model;

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
        'feedback'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function feedback()
    {
        return $this->hasMany(Feedback::class, 'meeting_id', 'id');
    }
}