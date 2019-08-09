<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unit;
use Illuminate\Support\Facades\DB;

class UnitsController extends Controller
{
    public function getUnits()
    {
        $units = DB::table('units')
            ->select('units.*')
            ->get();
        return compact('units');
    }
}
