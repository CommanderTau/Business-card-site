<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\FeedbackForm;

class FeedbackController extends Controller
{
    public function form()
    {
        return view('feedback.form');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|min:10'
        ]);

        // Отправка на почту (раскомментируйте после настройки)
        // Mail::to('your@email.com')->send(new FeedbackForm($validated));

        return redirect()->route('feedback.success')
               ->with('success', 'Сообщение успешно отправлено!');
    }

    public function success()
    {
        return view('feedback.success');
    }
}