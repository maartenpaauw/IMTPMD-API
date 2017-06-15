<?php

namespace IMTPMD\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model 
{
    /**
     * @var string
     */
    protected $table = 'users';

    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * @var array
     */
    protected $fillable = [
        'number'
    ];

    /**
     * @var array
     */
    protected $with = [
        'meetings',
        'feedback'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function meetings()
    {
        return $this->hasMany(Meeting::class, 'user_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function feedback()
    {
        return $this->hasMany(Feedback::class, 'user_id', 'id');
    }

}