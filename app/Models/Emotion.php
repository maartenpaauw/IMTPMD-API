<?php

namespace IMTPMD\Models;

use Illuminate\Database\Eloquent\Model;

class Emotion extends Model 
{
    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'slug'
    ];

    /**
     * @param $query
     * @return mixed
     */
    public function scopeBlij ($query) {
        return $query->where('slug', 'blij')->first();
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeNeutraal ($query) {
        return $query->where('slug', 'neutraal')->first();
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeVerdrietig ($query) {
        return $query->where('slug', 'verdrietig')->first();
    }
}