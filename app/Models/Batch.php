<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;

    public static $batch;

    public static function newBatch($request)
    {
        self::$batch = new Batch();
        self::$batch->name = $request->name;
        self::$batch->course_id = $request->course_id;
        self::$batch->start_date = $request->start_date;
//        self::$batch->start_date = strtotime($request->start_date);
//        self::$batch->start_date = strtotime(date('Y-m-d',$request->start_date));
        self::$batch->save();
    }

    public static function updateBatch($request,$batch)
    {
        $batch->name = $request->name;
        $batch->course_id = $request->course_id;
        $batch->start_date = $request->start_date;
//        $batch->start_date = strtotime(date('Y-m-d',$request->start_date));
        $batch->save();
    }

    public function courses()
    {
        return $this->belongsTo(Course::class,'course_id');
//        return $this->belongsTo(Course::class);
    }

}
