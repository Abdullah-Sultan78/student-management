<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    public static $teacher;

    public static function newTeacher($request)
    {
        self::$teacher = new Teacher();
        self::$teacher->name = $request->name;
        self::$teacher->address = $request->address;
        self::$teacher->mobile = $request->mobile;
        self::$teacher->save();
    }

    public static function updateTeacher($request, $teacher)
    {
        $teacher->name = $request->name;
        $teacher->address = $request->address;
        $teacher->mobile = $request->mobile;
        $teacher->save();
    }

}
