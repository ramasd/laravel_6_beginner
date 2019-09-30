<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HelloController extends Controller
{
    public function about() 
    {
        return view('about');
    }

    public function services() 
    {
        $services = [
            'Cool Service 1',
            'Another Cool Service',
        ];

        $services = Service::All();

        return view('services', compact('services')); 
    }
}
