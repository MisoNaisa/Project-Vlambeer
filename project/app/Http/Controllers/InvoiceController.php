<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class InvoiceController extends Controller
{
    public function invoice()
    {
//      WERKEND
//        $data = 'hoi';
//        $pdf = App::make('dompdf.wrapper');
//        $pdf->loadHTML($data);
//        return $pdf->stream();

        $data = view('user.invoice');
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($data);
        return $pdf->stream();
    }
}
