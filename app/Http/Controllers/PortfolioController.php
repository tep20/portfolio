<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request as HttpRequest;

class PortfolioController extends Controller
{
    public function index()
    {
        // Memanggil file resources/js/Pages/Portfolio.vue
        return Inertia::render('Portfolio');
    }

    public function sendMessage(HttpRequest $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        Mail::send(new ContactMessage(
            $validatedData['name'],
            $validatedData['email'],
            $validatedData['message']
        ));

        return back()->with('message', 'Pesan berhasil dikirim!');
    }
}