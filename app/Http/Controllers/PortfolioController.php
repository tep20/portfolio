<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class PortfolioController extends Controller
{
    public function index()
    {
        // Memanggil file resources/js/Pages/Portfolio.vue
        return Inertia::render('Portfolio');
    }
}