<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public static $course;

    public static function newCourses($request)
    {
        self::$course = new Course();
        self::$course->name = $request->name;
        self::$course->syllabus = $request->syllabus;
        self::$course->duration = $request->duration;
        self::$course->save();
    }

    public static function updateCourse($request,$course)
    {
        $course->name = $request->name;
        $course->syllabus = $request->syllabus;
        $course->duration = $request->duration;
        $course->save();
    }

//    public function course()
//    {
//        return $this->belongsTo(Course::class);
//    }

}
