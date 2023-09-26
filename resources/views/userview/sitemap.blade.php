<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($notice_datas as $notice_data)
        <url>
            <loc>{{ url('/') }}/{{ $notice_data->slug }}</loc>
            <lastmod>{{ $notice_data->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
    @foreach ($event_datas as $event_data)
        <url>
            <loc>{{ url('/') }}/{{ $event_data->slug }}</loc>
            <lastmod>{{ $event_data->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
</urlset>
