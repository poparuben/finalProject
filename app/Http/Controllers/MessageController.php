<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{


        public function index(Request $request)
        {


                request()->validate([

                        'name' => 'required',
                        'second-name' => 'required',
                        'mail' => 'required|email',
                        'text-content' => 'required'

                ]);

                $message = new Message([
                        'name' => $request->input('name', ''),
                        'second_name' => $request->input('second-name', ''),
                        'mail' => $request->input('mail', ''),
                        'message_content' => $request->input('text-content', '')
                ]);
                $message->save();
                return redirect('contact')->with('success', 'Te vom contacta in curand!');
        }

        public function show()
        {
                $messages = Message::orderBy('created_at', 'desc')->get();

                return view('admin-all-messages', ['messages' => $messages]);
        }
}
