<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Auth;
use App\Models\Payment;

class ReportController extends Controller
{
    $payment = Payment::find(pid);
    $pid = App::make('dompdf.wrapper');
    $print = "<div style=>"

}
