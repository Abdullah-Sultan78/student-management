<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public static $payment;

    public static function newPayment($request)
    {
        self::$payment = new Payment();
        self::$payment->enrollment_id = $request->enrollment_id;
        self::$payment->paid_date = $request->paid_date;
//        self::$payment->paid_date = strtotime(date('Y-m-d',$request->paid_date));
        self::$payment->amount = $request->amount;
        self::$payment->save();
    }

    public static function updatePayment($request,$payment)
    {
        $payment->enrollment_id = $request->enrollment_id;
        $payment->paid_date = $request->paid_date;
//        $payment->paid_date = strtotime(date('Y-m-d',$request->start_date));
        $payment->amount = $request->amount;
        $payment->save();
    }
}
