<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        if (!session('admin_logged_in')) return redirect()->route('admin.login');
        $clients = Client::withCount('projects')->orderBy('name')->paginate(15);
        return view('admin.clients.index', compact('clients'));
    }

    public function create()
    {
        if (!session('admin_logged_in')) return redirect()->route('admin.login');
        return view('admin.clients.create');
    }

    public function store(Request $request)
    {
        if (!session('admin_logged_in')) return redirect()->route('admin.login');
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'company' => 'nullable|string|max:255',
            'website' => 'nullable|url',
            'address' => 'nullable|string|max:500',
            'note' => 'nullable|string',
            'type' => 'required|in:fotacek,gastrotech,maponculture,custom,other'
        ]);
        Client::create($validated);
        return redirect()->route('admin.clients.index')->with('success', 'Klient byl úspěšně přidán.');
    }

    public function edit($id)
    {
        if (!session('admin_logged_in')) return redirect()->route('admin.login');
        $client = Client::findOrFail($id);
        return view('admin.clients.edit', compact('client'));
    }

    public function update(Request $request, $id)
    {
        if (!session('admin_logged_in')) return redirect()->route('admin.login');
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'company' => 'nullable|string|max:255',
            'website' => 'nullable|url',
            'address' => 'nullable|string|max:500',
            'note' => 'nullable|string',
            'type' => 'required|in:fotacek,gastrotech,maponculture,custom,other'
        ]);
        $client = Client::findOrFail($id);
        $client->update($validated);
        return redirect()->route('admin.clients.index')->with('success', 'Klient byl úspěšně upraven.');
    }

    public function destroy($id)
    {
        if (!session('admin_logged_in')) return redirect()->route('admin.login');
        Client::findOrFail($id)->delete();
        return redirect()->route('admin.clients.index')->with('success', 'Klient byl smazán.');
    }
}