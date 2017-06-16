<?php

namespace IMTPMD\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * @package IMTPMD\Models
 */
class User extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'number'
    ];
}