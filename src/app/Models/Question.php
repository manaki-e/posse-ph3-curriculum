<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function getData()
    {
        $questions_array =
            [
                'id' => $this->id,
                'content_id' => $this->content_id,
                'question' => $this->question,
                'question_image' => $this->question_image
            ];
        return $questions_array;
    }

    public function choices()
    {
        return $this->hasMany('App\Models\Choice');
    }
}
