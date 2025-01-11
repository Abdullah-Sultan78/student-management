<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    public static $enroll,$enrollment;

    public static function newEnroll($request)
    {
        self::$enroll = new Enrollment();
        self::$enroll->enroll_no = $request->enroll_no;
        self::$enroll->batch_id = $request->batch_id;
        self::$enroll->student_id = $request->student_id;
        self::$enroll->join_date = $request->join_date;
        self::$enroll->fee = $request->fee;
        self::$enroll->save();
    }

    public static function updateEnroll($request,$enroll)
    {
        $enroll->enroll_no = $request->enroll_no;
        $enroll->batch_id = $request->batch_id;
        $enroll->student_id = $request->student_id;
        $enroll->join_date =$request->join_date;
        $enroll->fee = $request->fee;
        $enroll->save();
    }

    public function batchs()
    {
        return $this->belongsTo(Batch::class,'batch_id');
    }

    public function students()
    {
        return $this->belongsTo(Student::class,'student_id');
    }



}
