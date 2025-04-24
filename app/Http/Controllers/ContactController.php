<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
{
    return view('contact.show'); // Убедитесь что путь совпадает
}

public function submit(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:100',
        'email' => 'required|email',
        'message' => 'required|string|min:10|max:1000'
    ]);

    // Здесь можно добавить обработку данных

    return back()->with('success', 'Сообщение успешно отправлено!');
    
    // Или для редиректа на страницу успеха:
    // return redirect()->route('contact.success');
}
}