<?php

namespace IMTPMD\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Emotion
 * @package IMTPMD\Models
 */
class Emotion extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
    ];

    /**
     * @var array
     */
    protected $appends = [
        'android_image',
        'android_image_active'
    ];

    /**
     * @param $query
     * @return mixed
     */
    public function scopeBlij($query)
    {
        return $query->where('slug', 'blij')->first();
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeNeutraal($query)
    {
        return $query->where('slug', 'neutraal')->first();
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeVerdrietig($query)
    {
        return $query->where('slug', 'verdrietig')->first();
    }

    /**
     * @return string
     */
    public function getAndroidImageAttribute () {
        return $this->slug . ".png";
    }

    /**
     * @return string
     */
    public function getAndroidImageActiveAttribute () {
        return $this->slug . "_active.png";
    }
}