<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Exam extends Model
{
    use HasFactory;
    protected $guarded=['id' , 'created_at', 'updated_at'];


    /**
     * Get the user that owns the Exam
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }

    /**
     * Get all of the comments for the Exam
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function question()
    {
        return $this->hasMany(Question::class);
    }

    /**
     * The roles that belong to the Exam
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function name($lang = null)
    {
          $lang= $lang ?? App::getLocale();
          return json_decode($this->name)->$lang;

    }

    public function desc($lang = null)
    {
          $lang= $lang ?? App::getLocale();
          return json_decode($this->desc)->$lang;

    }
}
