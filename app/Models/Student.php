<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $primaryKey = 'student_id';

    public function attachmentPlace()
    {
        return $this->belongsTo(AttachmentPlace::class);
    }

    public function trainingInstitution()
    {
        return $this->belongsTo(TrainingInstitution::class);
    }

    public function weeklyLogs()
    {
        return $this->hasMany(WeeklyLog::class);
    }
}
