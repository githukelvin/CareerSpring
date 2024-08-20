<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Assessment extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $primaryKey = 'lecturer_id';

    public function students(): BelongsTo
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function lecturers()
    {
        return $this->belongsTo(Lecturer::class, 'lecturer_id', 'lecturer_id');
    }
}
