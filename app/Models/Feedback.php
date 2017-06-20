<?php

namespace IMTPMD\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Feedback
 * @package IMTPMD\Models
 */
class Feedback extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'emotion_id',
        'meeting_id',
        'user_id',
        'description',
    ];

    /**
     * @var array
     */
    protected $with = [
        'emotion',
        'user',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function emotion()
    {
        return $this->hasOne(Emotion::class, 'id', 'emotion_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

}