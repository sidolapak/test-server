<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index ()
    {
        $margin = DB::table('pemesanan')
        ->where('pemesanan.status_margin', 'Complete')
        ->sum('pemesanan.margin');

        $hargatotal = DB::table('pemesanan')
        ->where('pemesanan.status_margin', 'Complete')
        ->sum('pemesanan.harga_total');
        return view('home',compact(
            'margin',
            'hargatotal',
        ));

    }
}
