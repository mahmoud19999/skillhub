<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        $data['sett']= Setting::select('email' , 'phone')->first();
        return view('contact')->with($data);
    }

    public function send(Request $request)

    {
      $request->validate([

        'name'=> 'required|string|max:225',
        'email'=> 'required|email|max:225',
        'subject'=> 'nullable|string|max:225',
        'body'=> 'required|string',

      ]);          //hena tare2t el validation teshta3`l ma3 el ajax 3ady we deh el tare2a el
                     //3adya el bnsta5dmha

      Message::create([

       'name'=>$request->name,
       'email'=>$request->email,
       'subject'=>$request->subject,
       'body'=>$request->body,

      ]);
         $data= ['success' => 'your message sent successfully'];
         return Response::json($data);
    }
}




//public function send(Request $request)

//{
  //$validator=Validator::make($request->all(), [

    //'name'=> 'required|string|max:225',
    //'email'=> 'required|email|max:225',
    //'subject'=> 'nullable|string|max:225',
    //'body'=> 'required|string',

  //]);
                             //-->ehna hena makonash mehtageen ne3ml el validation kda fel ajax
  //if($validator->fails())       el tare2a deh mmkn n3mlha wehna sha3`aleen API ,,3ashan kda fe
  //{                         function send foo2 bnshta3`l bel tare2a el 3adya 3ashan dah ajax
      //$errors=$validator->errors();
      //return Response::json($errors);
  //}


  //Message::create([

   //'name'=>$request->name,
   //'email'=>$request->email,
   //'subject'=>$request->subject,
   //'body'=>$request->body,

  //]);
     //$data= ['success' => 'your message sent successfully'];
     //return Response::json($data);
//}
