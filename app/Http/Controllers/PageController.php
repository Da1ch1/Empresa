<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Mostrar la página de inicio.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Devuelve la vista dashboard.section
        return view('dashboard.combined');
    }
    
}