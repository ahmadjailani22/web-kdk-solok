<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Message;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    public function home()
    {
        $services = Service::where('is_active', true)
            ->orderBy('order')
            ->take(6)
            ->get();

        $portfolios = Portfolio::where('is_active', true)
            ->latest()
            ->take(4)
            ->get();

        $articles = Article::where('is_published', true)
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('pages.home', compact('services', 'portfolios', 'articles'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        $services = Service::where('is_active', true)
            ->orderBy('order')
            ->get();

        return view('pages.services', compact('services'));
    }

    public function serviceDetail(Service $service)
    {
        return view('pages.service-detail', compact('service'));
    }

    public function portfolios()
    {
        $portfolios = Portfolio::where('is_active', true)
            ->latest()
            ->paginate(9);

        return view('pages.portfolios', compact('portfolios'));
    }

    public function portfolioDetail(Portfolio $portfolio)
    {
        return view('pages.portfolio-detail', compact('portfolio'));
    }

    public function articles()
    {
        $articles = Article::where('is_published', true)
            ->latest('published_at')
            ->paginate(6);

        return view('pages.articles', compact('articles'));
    }

    public function articleDetail(Article $article)
    {
        return view('pages.article-detail', compact('article'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function sendContact(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ])->validate();

        Message::create($validated);

        return back()->with('success', 'Pesan kamu berhasil dikirim. Terima kasih!');
    }

    public function sitemap()
    {
        $services = Service::where('is_active', true)->get();
        $portfolios = Portfolio::where('is_active', true)->get();
        $articles = Article::where('is_published', true)->get();

        $content = view('sitemap', compact('services', 'portfolios', 'articles'))->render();

        return response($content, 200)
            ->header('Content-Type', 'application/xml');
    }
}