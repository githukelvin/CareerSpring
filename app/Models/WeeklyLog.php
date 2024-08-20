<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WeeklyLog extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function students(): BelongsTo
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

}
