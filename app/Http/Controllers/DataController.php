<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{

    public function getIndex() {
        return 'test';


    }


    public function ApiIndex() {
        return response()->json([
        'name' => 'h3x4',
        'age' => '19',
        'hoppies' => '420',
        'OS' => 'w10',
        'url' => 'http://master.iechosys.com:813/api'

       ]);

    }


}
