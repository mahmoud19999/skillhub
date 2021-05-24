<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{


    public function show($id)
    {
        $data['skill']= Skill::findorFail($id);
        return view('showskill')->with($data);
    }
}
