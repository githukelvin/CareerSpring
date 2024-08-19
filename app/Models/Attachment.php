<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Attachment extends Model
{
    use HasFactory;


    protected $guarded = [];


    public static function countByMonth()
    {
        return DB::table('attachments')
            ->select(DB::raw('MONTH(end_date) as month'), DB::raw('COUNT(*) as student_count'))
            ->groupBy('month')
            ->orderBy('month')
            ->get();
    }
}
