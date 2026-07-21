{!! '<?xml version="1.0" encoding="UTF-8"?>' !!}
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    <url>
        <loc>{{ route('home') }}</loc>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{ route('about') }}</loc>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('services.index') }}</loc>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('portfolios.index') }}</loc>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('articles.index') }}</loc>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('contact') }}</loc>
        <priority>0.7</priority>
    </url>

    @foreach ($services as $service)
    <url>
        <loc>{{ route('services.show', $service) }}</loc>
        <lastmod>{{ $service->updated_at->toAtomString() }}</lastmod>
        <priority>0.6</priority>
    </url>
    @endforeach

    @foreach ($portfolios as $portfolio)
    <url>
        <loc>{{ route('portfolios.show', $portfolio) }}</loc>
        <lastmod>{{ $portfolio->updated_at->toAtomString() }}</lastmod>
        <priority>0.6</priority>
    </url>
    @endforeach

    @foreach ($articles as $article)
    <url>
        <loc>{{ route('articles.show', $article) }}</loc>
        <lastmod>{{ $article->updated_at->toAtomString() }}</lastmod>
        <priority>0.6</priority>
    </url>
    @endforeach

</urlset>