<?php

namespace App\Http\Controllers;

use App\Models\Allotment;
use Illuminate\Http\Request;

class AllotmentController extends Controller
{
    public function freshAllotment()
    {
        return view("fresh-allotment-form");
    }
}
