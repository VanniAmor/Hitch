<?php

namespace App\Model\Images;

use App\Model\Images\Images;


class LicenceImage extends Images
{
    public $table = "vehicle_licence_img";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'vid','url'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
    ];


}
