@php
$setting = App\Model\Setting::findOrFail(1);
$blog = App\model\Blog::latest()->paginate(2);
$cities = App\model\City::get();
$countries = App\model\Country::get();
$date = date('Y');

$whatsapp = preg_replace('/[+\(\)\-\" "]+/', '', $setting->whatsapp);
@endphp
<!DOCTYPE html>
<html lang="en">

<head>


  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="icon" type="image/png" sizes="20x20" href="{{url('imgs/'.$setting->fav_icon)}}">
  <title>@yield('title')</title>
  <meta name="keywords" content="@yield('keywords')">
  <meta name="description" content="@yield('description')">
  <link rel="canonical" href="@yield('canonical')" />
  <meta name="author" content="Jai Pal | Manish | Digvijay">
  <!-- opengraph tag -->
  <meta property="og:site_name" content="Blast Rooms">
  <meta property="og:url" content="https://www.blastrooms.in/">
  <meta property="og:type" content="website">
  <meta property="og:title" content="@yield('title')" />
  <meta property="og:description" content="@yield('description')" />
  <meta property="og:image" content="" />
  <!-- Schema.org for Google -->
  <meta itemprop="name" content="Blast Rooms">
  <meta itemprop="description" content="@yield('description')">
  <meta itemprop="image" content="">
  <!-- Twitter -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="@yield('title')">
  <meta name="twitter:description" content="@yield('description')">
  <meta name="twitter:site" content="@Blast Rooms">
  <meta name="twitter:creator" content="@Suncity Group">
  <meta name="twitter:image:src" content="">
  <meta name="csrf-token" content="{{csrf_token()}}">

  {{Html::style('css/bootstrap.min.css')}}
  {{Html::style('css/style.css')}}
  {{Html::style('css/responsive.css')}}
  {{Html::style('icomoon/style.css')}}
  {{Html::style('css/fontawesome.css')}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="shortcut icon" href="#" type="image/x-icon" />
  <link rel="apple-touch-icon" href="#" />
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-HQFS3V3YJZ"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-HQFS3V3YJZ');
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [{
        "@type": "Question",
        "name": "what is the difference between shot blasting and sandblasting?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "The only difference is the fact that sand blasting machine is using silica sand as its abrasive media, whereas with shot blasting machine they are using metallic shots that range from steel, copper to aluminum."
        }
      }, {
        "@type": "Question",
        "name": "what is abrasive media/shots/grit?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Abrasive Blast Media comes in many different shapes and sizes. The size, shape. Abrasive blasting, which is the process of using specialized machinery to project or “shoot” media at high speed across a hard surface, can be ideal for removing old finishes. It can also power away rust or prepare the surface for painting.Abrasive blasting is using pressurized air or water to propel abrasive media against a surface to remove coating, corrosion, or contamination."
        }
      }, {
        "@type": "Question",
        "name": "Can you reuse sand blasting sand?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes! We can reuse sandblasting sand and it is regarded as an environmentally friendly process. There is equipment called material recycling or media reclamation system that collects abrasive like sand to reuse again."
        }
      }, {
        "@type": "Question",
        "name": "what are the uses of flame spray gun?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Wire Flame Spray Gun is the set of approaches in which uses an oxy-fuel flame to melt the wires. After melting the melted metals are then atomized with compressed air to create a spray stream that applies the coating on the surface being sprayed. A flame Spray gun is a uses for spray both ferrous & nonferrous material."


        }
      }]
    }
  </script>

</head>

<body class="" itemscope itemtype="http://schema.org/WebPage">
  <div class="container show_body">
    @section('header')
    <div class="row pt-3 pb-3">
      <div class="col-lg-6 col-6 text-left">
        <span class="header-mobile"><a href="tel:{{ $setting->mobile_no }}" style="position:relative; text-decoration:none;"><i class="icon-phone insta-bg" style="position: relative;padding: 13px;border-radius: 50%;
background:#3498db;left: 12px;top: 1px;color:#fff;"></i><span style="background:#3498db;color:#fff;padding:10px;padding-left:25px;border-radius:3px;">{{ $setting->mobile_no }}</span></a></span>
      </div>
      <div class="col-lg-6 col-6 pull-right text-right" style="position:relative;">
        <span class="header-mobile" onclick="open_pop()" style="background:#3498db;color:#fff;padding:10px;margin-right:35px;border-radius:3px;">Send Email <i class="icon-envelop insta-bg" style="position: relative;padding: 13px;border-radius: 50%;
background:#3498db;right: -33px;top: 1px;color:#fff;"></i></span>
      </div>
    </div>
    <div class="row" style="background-color: #3498DB;-webkit-box-shadow: 0px 6px 10px -5px rgba(0,0,0,0.75);position: sticky;top: 0;z-index: 2;">
      <div class="col-lg-12">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a href="{{url('/')}}" class="navbar-brandv my_logo" style="padding:0px;margin:0px;">
            @if($setting->logo !='')
            <img src="{{ url('imgs/'.$setting->logo) }}" alt="logo" style="height:50px;">
            @else
            {{ $setting->sitename }}
            @endif
            <a href="tel:{{ $setting->mobile_no }}" class="mobile_no"><i class="icon-phone insta-bg" style="margin-left: 12px;"></i> {{ $setting->mobile_no }}</a>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse ml-5" id="navbarSupportedContent" itemprop="breadcrumb">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item" style="text-align:right;">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/about') }}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/product') }}">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/blog') }} ">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
              </li>
            </ul>

          </div>
        </nav>
      </div>
    </div>


    @show


    @yield('contant')


    @section('footer')
    <section class="row footer-section">
      <div class="container mb-4">
        <div class="section-title" style="color: #fff;">
          <p class="text-center other-heading">LOCATIONS</p>
        </div>
        <div class="city-links text-left">
          @foreach($cities as $c)
          <a href="{{ route('frontcity', $c->slug) }}" class=""><i class="icon-location mr-1"></i>{{ $c->name }}</a>
          @endforeach
        </div>

        <div class="city-links text-left">
          @foreach($countries as $c)
          <a href="{{ route('frontcountry', $c->slug) }}" class=""><i class="icon-location mr-1"></i>{{ $c->name }}</a>
          @endforeach
        </div>
      </div>
      <div class="container">
        <!--<div class="footer-logo text-center">-->
        <!--    <a href="https://www.cbgindustries.in"><img src="https://www.cbgindustries.in/imgs/icon 1.png" alt="" width="70"></a>-->
        <!--</div>-->
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="footer-widget about-widget">

              <p class="footer-heading">About</p>
              <p>Blast Rooms, more commonly known as sand blasting machine, is the operation of forcibly propelling a stream of abrasive material against a surface under high pressure to smooth a rough surface, roughen a smooth surface, shape a surface or remove surface contaminants.</p>

            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="footer-widget about-widget">
              <p class="footer-heading">Quick Link</p>
              <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About Us</a></li>
                <li><a href="{{ url('/blog') }}">Blog</a></li>
                <li><a href="{{ url('/product') }}">Product</a></li>
                <li><a href="{{ url('/contact') }}">Contact Us</a></li>
              </ul>
              <ul>
                <li><a href="#">Support</a></li>
                <li><a href="#">Terms of Use</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="footer-widget about-widget">
              <p class="footer-heading">Top Blog</p>
              <div class="fw-latest-post-widget">
                @foreach( $blog as $list )
                <div class="lp-item">
                  <div class="lp-thumb set-bg">
                    <a href="{{ url('blog/'. $list->slug)}}">
                      @if($list->image!='')
                      <img src="{{url('imgs/blogs/'.$list->image)}}" alt="{{ $list->title }}">
                      @else
                      <img class="" src="{{url('imgs/unavailable-image-300x225.jpg')}}" alt="{{ $list->title }}">
                      @endif
                    </a>
                  </div>
                  <div class="lp-content">
                    <p class="footer-blog mb-0">{{ $list->title }}</p>
                    <span>{{ $list->updated_at }}</span>
                    <a href="{{ url('blog/'. $list->slug)}}" class="readmore">Read More</a>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="footer-widget contact-widget">
              <p class="footer-heading">Get in Touch</p>
              <div class="con-info">
                <span><i class="icon-office"></i></span>
                <p> {{ $setting->sitename }} </p>
              </div>
              <div class="con-info">
                <span><i class="icon-location"></i></span>
                <p>{{ $setting->address }}</p>
              </div>
              <div class="con-info">
                <span><i class="icon-whatsapp"></i></span>
                <p><a href="https://wa.me/{{ $whatsapp }}">{{ $setting->mobile_no }}</a></p>
              </div>
              <div class="con-info">
                <span><i class="icon-envelop"></i></span>
                <p><a href="mailto:{{ $setting->email }}" class="__cf_email__">{{ $setting->email }}</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="social-links-warp text-center">
        <div class="container">
          <div class="social-links text-center">
            <a href="#" class="instagram"><i class="icon-instagram"></i><span>instagram</span></a>
            <a href="#" class="google-plus"><i class="icon-google-plus"></i><span>g+plus</span></a>
            <a href="#" class="pinterest"><i class="icon-pinterest"></i><span>pinterest</span></a>
            <a href="#" class="facebook"><i class="icon-facebook"></i><span>facebook</span></a>
            <a href="#" class="twitter"><i class="icon-twitter"></i><span>twitter</span></a>
            <a href="#" class="youtube"><i class="icon-youtube"></i><span>youtube</span></a>
            <!--<a href="#" class="tumblr"><i class="icon-tumblr-square"></i><span>tumblr</span></a>-->
          </div>

          <p class="text-white text-center mt-5">Copyright &copy; {{$date}} All rights reserved {{ $setting->sitename }}. Website Design and Developed by A2ZProviders</p>

        </div>
      </div>
    </section>
    @show
  </div>
  <!-- ALL JS FILES -->
  {{ Html::script('js/jquery.min.js') }}
  {{ Html::script('js/popper.min.js') }}
  {{ Html::script('js/bootstrap.min.js') }}
  {{ Html::script('js/ajax.js') }}

  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <p class="modal-title other-heading">Send Enquiry</p>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p id="ajax_message"></p>
          {{ Form::open(['id'=>'inquiry_form', 'method'=>'post', 'data-url'=> route('ajax-route')]) }}

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="user_name">Name</label>
                <!--<input type="text" class="form-control" id="user_name" aria-describedby="emailHelp" placeholder="Enter your name">-->
                {{ Form::text('user_name', '', ['class' => 'form-control validate', 'id'=>'user_name', 'placeholder'=>'User name','required'=>'required'])}}
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="user_email">Email address</label>
                <!--<input type="email" class="form-control" id="user_email" aria-describedby="emailHelp" placeholder="Enter email">-->
                {{ Form::email('user_email', '', ['class' => 'form-control validate', 'id'=>'user_email', 'placeholder'=>'User email','required'=>'required'])}}
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="user_mobile">Mobile Number</label>
                <!--<input type="tel" class="form-control" id="mobile_num" placeholder="Enter mobile number">-->
                {{ Form::tel('user_mobile', '', ['class' => 'form-control validate', 'id'=>'user_mobile', 'placeholder'=>'User mobile number','required'=>'required'])}}
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="country">Country</label>
                <!--<input type="text" class="form-control" id="country" aria-describedby="emailHelp" placeholder="Enter country">-->
                {{ Form::text('country', '', ['class' => 'form-control validate', 'id'=>'country', 'placeholder'=>'Enter Country','required'=>'required'])}}
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="user_message">Enquiry text</label>
            <!--<textarea class="form-control" id="enquiry_msg" rows="3"></textarea>-->
            {{ Form::textarea('message', '', ['class' => 'form-control validate', 'id'=>'user_message', 'placeholder'=>'Enter Message','required'=>'required', 'rows'=>3])}}
          </div>
          <button class="btn btn-primary popups-btn" type="submit">Send Inquiry</button>
          {{ Form::close() }}
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  {{ Html::script('//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js') }}
  <script>
    function open_pop() {
      $('.modal').modal('show');
    }
    $('.responsive').slick({

      infinite: true,
      speed: 3000,
      slidesToShow: 4,
      slidesToScroll: 4,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 5000,
      responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });

    $(document).ready(function() {

      $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
          $('body').addClass('scrolled');
        } else {
          $('body').removeClass('scrolled');
        }
      });

      $('#scroll-to-top').click(function() {
        $("html, body").animate({
          scrollTop: 0
        }, 600);
        return false;
      });

    });
  </script>
</body>

</html>