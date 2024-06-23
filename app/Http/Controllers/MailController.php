<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailRequest;
use App\Mail\FeedbackMail;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class MailController extends Controller
{

    public function show_form()
    {
        return view('elitvid.site.form');
    }

    public function send(MailRequest $mailRequest)
    {
//        $route = \Illuminate\Support\Facades\Route::currentRouteName();
        $data = $mailRequest->all();

        if ($mailRequest->hasFile('file')) {
            $name = $mailRequest->file('file')->getClientOriginalName();
            $path = Storage::putFileAs('files', $mailRequest->file('file'), $name); // Даем путь к этому файлу
            $data['file'] = $path;
            Mail::to('Elitvid.site@yandex.ru')->send(new FeedbackMail($data));
            Storage::delete($path);
        } else {
            Mail::to('Elitvid.site@yandex.ru')->send(new FeedbackMail($data));
        }

//        dd($data);
//        return redirect(route('home'));
    }
}
