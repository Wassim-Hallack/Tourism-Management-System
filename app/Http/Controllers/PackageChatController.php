<?php

namespace App\Http\Controllers;

//use http\Env\Request;
use App\Events\PlaygroundEvent;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\fileExists;

class PackageChatController extends Controller
{


    public function messagesend(Request $request)
    {
        $request->validate([
            'package_id' => 'required|numeric',
            'Message_Content' => 'required|string',
        ]);

        $n = $request->package_id;
        $user = auth()->user();
        $filepath = $n . '.json';


        // $timestamp = time();
        $carbon = Carbon::now()->addHours(3)->toDateTimeString();

        $message = [
            'sender_email' => $user->email,
            'sender_fname' => $user->name,
            'sender_lname' => $user->last_name,
            'content' => $request->Message_Content,
            'timestamp' => $carbon
        ];

        $path = storage_path('app/' . $filepath);
        $messages = file_get_contents($path);
        $data = json_decode($messages, true);
        $data[] = $message;
        $encodedMessages = json_encode($data);

        Storage::put($filepath, $encodedMessages);

        // event(new PlaygroundEvent());

        return response()->json([
            'status' => 'success',
            'message' => 'sent successfuly',
            'data' => $message
        ], 200);
    }



    public function getmessages(Request $request)
    {

        $n = $request->query('package_id');
        $filepath = $n . '.json';
        $path = storage_path('app/' . $filepath);

        if (!file_exists($path)) {
            $messages =  json_decode(Storage::put($n . '.json', '[]'), false);
            return response()->json([
                'status' => 'success',
                'message' => 'the chat created ',
                'data' => $messages
            ], 200);
        }
        $messages = json_decode(Storage::get($filepath), false);
        return response()->json([
            'status' => 'success',
            'message' => 'the chat content',
            'data' => $messages
        ], 200);
    }
}
