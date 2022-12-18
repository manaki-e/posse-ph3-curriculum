<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Question
 *
 * @property int $id
 * @property int $content_id
 * @property string $question
 * @property string $question_image
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Choice[] $choices
 * @property-read int|null $choices_count
 * @method static \Illuminate\Database\Eloquent\Builder|Question newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Question newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Question query()
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereContentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereQuestionImage($value)
 * @mixin \Eloquent
 */
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
