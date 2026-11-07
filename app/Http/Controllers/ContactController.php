<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Store a new contact or producer inquiry.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'email' => ['nullable', 'email', 'max:255'],
            'producer_type' => ['nullable', 'string', 'max:100'],
            'cooperative_or_location' => ['nullable', 'string', 'max:255'],
            'hectares' => ['nullable', 'string', 'max:50'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        Contact::create($validated);

        return redirect()->to(url()->previous().'#contacto')
            ->with('status', '¡Gracias por comunicarte con el Proyecto GRACAMU IKAM! Tu mensaje ha sido registrado exitosamente. Nuestro equipo se pondrá en contacto pronto.');
    }
}
