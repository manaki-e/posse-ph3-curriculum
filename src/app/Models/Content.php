<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Content
 *
 * @property int $id
 * @property string $content
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Question[] $questions
 * @property-read int|null $questions_count
 * @method static \Illuminate\Database\Eloquent\Builder|Content newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Content newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Content query()
 * @method static \Illuminate\Database\Eloquent\Builder|Content whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Content whereId($value)
 * @mixin \Eloquent
 */
class Content extends Model
{
    use HasFactory;

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
