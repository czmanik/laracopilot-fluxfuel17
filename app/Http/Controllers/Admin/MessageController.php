<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {
        if (!session('admin_logged_in')) return redirect()->route('admin.login');
        $messages = Message::orderBy('created_at', 'desc')->paginate(20);
        return view('admin.messages.index', compact('messages'));
    }

    public function show($id)
    {
        if (!session('admin_logged_in')) return redirect()->route('admin.login');
        $message = Message::findOrFail($id);
        $message->update(['read' => true]);
        return view('admin.messages.show', compact('message'));
    }

    public function destroy($id)
    {
        if (!session('admin_logged_in')) return redirect()->route('admin.login');
        Message::findOrFail($id)->delete();
        return redirect()->route('admin.messages.index')->with('success', 'Zpráva byla smazána.');
    }
}