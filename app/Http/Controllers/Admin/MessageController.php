<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MessageController extends Controller
{
    // Show the form to edit messages.php
    public function index()
    {
        // Read the content of the messages.php files as raw PHP code
        $messagesEn = file_get_contents(resource_path('lang/en/messages.php'));
        $messagesId = file_get_contents(resource_path('lang/id/messages.php'));

        return view('backend.pages.message', compact('messagesEn', 'messagesId'));
    }

    // Save changes to the messages.php file
    public function save(Request $request)
    {
        // Get the raw content from the form (the messages come as PHP code)
        $messagesEn = $request->input('messages_en');
        $messagesId = $request->input('messages_id');

        // Save the updated content back to the respective PHP files
        file_put_contents(resource_path('lang/en/messages.php'), $messagesEn);
        file_put_contents(resource_path('lang/id/messages.php'), $messagesId);

        return redirect()->route('message.index')->with('success', 'Messages updated successfully!');
    }
}
