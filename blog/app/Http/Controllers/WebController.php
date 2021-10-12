<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{
    public function home()
    {
        $posts = Post::orderBy('created_at', 'DESC')->limit(3)->get();

        $head = $this->seo->render(
            env('APP_NAME') . ' - Home',
            'Eleita em 17 países a melhor escolha de ensino em PHP',
            url('/'),
            asset('images/img_bg_1.jpg'),
            true
        );

        return view('front.home', [
            'head' => $head,
            'posts' => $posts
        ]);
    }

    public function course()
    {
        $head = $this->seo->render(
            env('APP_NAME') . ' - Curso',
            'O melhor curso do mercado',
            route('course'),
            asset('images/img_bg_1.jpg'),
            true
        );

        return view('front.course', [
            'head' => $head
        ]);
    }

    public function blog()
    {
        $posts = Post::orderBy('created_at', 'DESC')->get();

        $head = $this->seo->render(
            env('APP_NAME') . ' - Blog',
            'Informações atualizadas sobre o mercado de trabalho',
            route('blog'),
            asset('images/img_bg_1.jpg'),
            true
        );

        return view('front.blog', [
            'head' => $head,
            'posts' => $posts
        ]);
    }

    public function article($uri)
    {
        $post = Post::where('uri', $uri)->first();

        $head = $this->seo->render(
            env('APP_NAME') . ' - ' . $post->title,
            $post->subtitle,
            route('article', $post->uri),
            \Illuminate\Support\Facades\Storage::url(\App\Support\Cropper::thumb($post->cover, 1200, 628)),
            true
        );

        return view('front.article', [
            'head' => $head,
            'post' => $post
        ]);
    }

    public function contact()
    {
        $head = $this->seo->render(
            env('APP_NAME') . ' - Contato',
            'Fale conosco ou trabalhe com a gente',
            route('contact'),
            asset('images/img_bg_1.jpg'),
            true
        );

        return view('front.contact', [
            'head' => $head
        ]);
    }

    public function sendMail(Request $request)
    {
        $data = [
            'reply_name' => $request->first_name . " " . $request->last_name,
            'reply_email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ];

//        var_dump($request->all());

//        Mail::send(new Contact($data));
//        return (new Contact($data));

        return redirect()->route('contact');
    }
}
