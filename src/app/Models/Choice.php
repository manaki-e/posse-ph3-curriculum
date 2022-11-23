<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    public function getData()
    {
        $choices_array =
            [
                'id' => $this->id,
                'question_id' => $this->question_id,
                'choice' => $this->choice,
                'valid' => $this->valid,
            ];
        return $choices_array;
    }
}
