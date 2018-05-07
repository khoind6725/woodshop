<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
	/**
     * default url avatar
     */
	const DEFAULT_AVATAR = asset('img/slider-img/bg.jpg');
    protected $table = 'sliders';
}
