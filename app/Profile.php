<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/4ZWRgdy3eem7wfWbjhCNwWJvV7GOeKWzxRQYDhbU.png';
        return '/storage/' . $imagePath;
    }
}
