<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Choice
 *
 * @property int $id
 * @property int $question_id
 * @property string $choice
 * @property int $valid
 * @method static \Illuminate\Database\Eloquent\Builder|Choice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Choice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Choice query()
 * @method static \Illuminate\Database\Eloquent\Builder|Choice whereChoice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Choice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Choice whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Choice whereValid($value)
 * @mixin \Eloquent
 */
class Choice extends Model
{
    use HasFactory;

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
