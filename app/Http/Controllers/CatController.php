<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function show($id)
    {
        $data['cat']=Cat::findorfail($id);
        $data['allCats']=Cat::select('id','name')->get();
        $data['skills']=$data['cat']->skills()->paginate(6);
        return view('show')->with($data);
    }
}
