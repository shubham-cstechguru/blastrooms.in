@php echo '<?xml version="1.0" encoding="UTF-8"?>' @endphp
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
   <url>
      <loc>{{ url('/') }}</loc>
      <changefreq>weekly</changefreq>
      <priority>0.9</priority>
   </url>
   <url>
      <loc>{{ url('about') }}</loc>
      <changefreq>weekly</changefreq>
      <priority>0.9</priority>
   </url>
   <url>
      <loc>{{ url('contact') }}</loc>
      <changefreq>weekly</changefreq>
      <priority>0.9</priority>
   </url>
</urlset>