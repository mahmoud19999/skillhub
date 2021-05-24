<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{

    public function show($id)
    {
        $data['exam']=Exam::findorFail($id);
        return view('showexam')->with($data);
    }

    public function questions($id)
    {
        $data['exam']=Exam::findorFail($id);

       return view('questions')->with($data);
    }
}
