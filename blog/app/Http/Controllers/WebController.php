<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

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
        $head = $this->seo->render(
            env('APP_NAME') . ' - Blog',
            'Informações atualizadas sobre o mercado de trabalho',
            route('blog'),
            asset('images/img_bg_1.jpg'),
            true
        );

        return view('front.blog', [
            'head' => $head
        ]);
    }

    public function article()
    {
        return view('front.article');
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
}
