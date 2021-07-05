<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSClCC2sTN0JYMZx12xcEgb5lELVfcJbTWAgmypCgB_fhJ6_VSx_fmrojdUj48pa7G5aYY&usqp=CAU';

        return '/storage/' . $imagePath;
    }

    public function followers(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(User:: class);
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
