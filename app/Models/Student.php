<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $primaryKey = 'student_id';


    public function attachmentPlace(): BelongsTo
    {
        return $this->belongsTo(AttachmentPlace::class);
    }

    public function attachment(): BelongsTo
    {
        return $this->belongsTo(Attachment::class, 'student_id', 'student_id');
    }

    public function trainingInstitution(): BelongsTo
    {
        return $this->belongsTo(TrainingInstitution::class, 'student_id', 'student_id');
    }

    public function weeklyLogs(): HasMany
    {
        return $this->hasMany(WeeklyLog::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }


}
