@php echo '<?xml version="1.0" encoding="UTF-8"?>' @endphp
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
   @foreach( $category as $cat )
   <url>
      <loc>{{ url('/') }}/category/{{ $cat->slug_category }}</loc>
      <lastmod>{{ date('c',strtotime($cat->created_at)) }}</lastmod>
      <changefreq>weekly</changefreq>
      <priority>0.9</priority>
   </url>
   @endforeach
</urlset>