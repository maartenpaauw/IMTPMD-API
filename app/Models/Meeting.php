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
        'ending_at',
    ];

    /**
     * @var array
     */
    protected $fillable = [
        'user_id',
        'name',
        'description',
        'starting_at',
        'ending_at',
    ];

    /**
     * @var array
     */
    protected $with = [
        'feedback',
        'user',
    ];

    /**
     * @var array
     */
    protected $appends = [
        'feedback_stats',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function feedback()
    {
        return $this->hasMany(Feedback::class, 'meeting_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    /**
     * @return array
     */
    public function getFeedbackStatsAttribute()
    {
        return [
            "total" => $this->feedback()->count(),
            Emotion::blij()->slug => $this->feedback()->where('emotion_id', Emotion::blij()->id)->count(),
            Emotion::neutraal()->slug => $this->feedback()->where('emotion_id', Emotion::neutraal()->id)->count(),
            Emotion::verdrietig()->slug => $this->feedback()->where('emotion_id', Emotion::verdrietig()->id)->count(),
        ];
    }
}