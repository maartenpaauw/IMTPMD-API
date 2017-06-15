<?php

namespace IMTPMD\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model 
{
    /**
     * @var string
     */
    protected $table = 'feedback';

    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * @var array
     */
    protected $fillable = [
        'emotion_id',
        'meeting_id',
        'user_id',
        'description'
    ];

    /**
     * @var array
     */
    protected $with = [
        'emotion'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function emotion()
    {
        return $this->hasOne(Emotion::class, 'id', 'emotion_id');
    }

}