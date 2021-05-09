<?php

namespace App\Http\Controllers\Codebase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('codebase.index');
    }
    public function create()
    {
        return view('codebase.create');
    }
    public function edit($id=0)
    {
        //Truyền mảng xuống cho view
        $data = [];
        $data['id']=$id;
        $data['name']='Duc';
        $data['age']='21';
        return view('codebase.edit',$data);
    }
    public function delete($id=0)
    {
        //Truyền mảng xuống cho view
        $data = [];
        $data['id']=$id;
        return view('codebase.delete',$data);
    }
}
