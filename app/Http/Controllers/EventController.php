<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pusher\Pusher;

class EventController extends Controller
{
    public function auth()
    {
        $options = [
            'cluster' => "eu",
            'useTLS' => true
        ];
        $pusher = new Pusher(
            "557c14e3e20a11d0dfd6",
            "ceff1e6c9aab05c0a3c0",
            "690258",
            $options
        );

        echo $pusher->socket_auth("private-task", $_POST['socket_id']);
    }

    public function message()
    {
        return response()->json(['message' => "Hello world"]);
    }
}
