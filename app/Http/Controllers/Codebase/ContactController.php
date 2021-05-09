<?php

namespace App\Http\Controllers\Codebase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        echo "<br> INDEX contact";
        echo __METHOD__;
    }
    public function index2($id,$name)
    {
        echo "<br>";
        echo __METHOD__;
        echo "<br> ID: $id";
        echo "<br> Name: $name";
    }
    public function index3($id=0,$name='')
    {
        echo "<br>";
        echo __METHOD__;
        echo "<br> ID: $id";
        echo "<br> Name: $name";
    }
}
