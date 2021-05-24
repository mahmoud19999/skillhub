<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Skill extends Model
{
    use HasFactory;
    protected $guarded=['id' , 'created_at', 'updated_at'];


    /**
     * Get the user that owns the Skill
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cat()
    {
        return $this->belongsTo(Cat::class);
    }

    /**
     * Get all of the comments for the Skill
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function exams()
    {
        return $this->hasMany(Exam::class);
    }

    public function name($lang = null)
    {
          $lang= $lang ?? App::getLocale();
          return json_decode($this->name)->$lang;

    }

    public function getStudentsCount()
    {
      $studentNum=0;
      foreach ($this->exams() as $exam)
      {
        $studentNum += $exam->users()->count();
      }
      return $studentNum;
    }
}
