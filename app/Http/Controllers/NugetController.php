<?php
namespace App\Http\Controllers;

class NugetController extends Controller
{

    public function getIndex() {

        return view ('nuget.index');
    }

}