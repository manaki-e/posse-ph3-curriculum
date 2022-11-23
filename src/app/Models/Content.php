<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    public function getData()
    {
        $contents_array =
            [
                'id' => $this->id,
                'content' => $this->content
            ];
        return $contents_array;
    }

    public function questions()
    {
        return $this->hasMany('App\Models\Question');
    }
}
