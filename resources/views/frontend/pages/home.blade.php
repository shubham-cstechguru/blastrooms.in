@extends('frontend.layouts.default')
@section('title','Sand/Shot/Grit Blasting Machine Manufacturer\'s | Thermal Spray gun, Abrasive media for sale in India')
@section('description','Sand blasting machine manufacturers in India - Leading manufacturer of shot blasting machine, thermal spray gun, arc spray gun, blast rooms, sand blasting hopper, shot blasting cabinets in India. And also supply & exports all type of abrasive media like steel shots, garnet sand, aluminum oxide, cut wire shots.')
@section('keywords', 'sand blasting machine, shot blasting machine, shot blasting machine manufacturers,sand blasting machine manufacturer in india, sand blasting cabinet, sand blasting hopper, thermal spray gun, arc spray gun in india, abrasive media, steel shot supplier')
@section('canonical',URL::current())
@section('contant')
       <div class="responsive my-4" style="margin:10px 0;">
       @foreach($product as $list)
            <div class="col-lg-3 col-sm-6 mb-1">
                <div class="product-item">
                    <div class="pi-pic">
                        <div class="card">
                            <a href="{{ url('product/'. $list->slug)}}">
                                @if($list->image!='')
								<img src="{{url('imgs/product/'.$list->image)}}" alt="{{ $list->title }}">
								@else
								<img class="" src="{{url('imgs/unavailable-image-300x225.jpg')}}" alt="{{ $list->title }}" >
								@endif
                            </a>
                            <div class="pi-text" style="min-height:50px;">
                                <a href="{{ url('product/'. $list->slug)}}" style="padding:0">
                                    <p class="text-center font-weight-bold my-3">{{$list->title}}</p>
                                </a>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
            
        @endforeach
     
  </div>
  
	<div class="mt-0" style="margin-bottom: 100px;">
    <div class="row self-adhesive-head">
      <a href="" style="width: 20px;"><img src="{{ url('imgs/zero.gif')}}" alt="Self-Adhesive Specialty Tapes &amp; Labels"></a>
      <strong>
        <span class="cpo">
          <a href="#">Sand Blasting Machine & Blast Rooms Labels</a>
        </span>
      </strong>
    </div>
    <div class="adhesive-list mt-4">
      <ul>
        @foreach($category as $list)  
       <li><a href="{{url('category/'.$list->slug_category)}}"> {{ $list-> category }}</a></li>
        @endforeach
      </ul>
    </div>
    <a href="" class="btn btn-link float-right home-view" style="text-decoration: none;">View All</a>
  </div>
<div>
  <div>
    <div>
        <div class="">
            <span style="font-size:1.5rem">Welcome to </span><h1 class="my-4 text-center" style="display:inline-block;font-size:1.2rem;">Blastroom Manufacturer's in India</h1>
        </div>    
   
    <div class="cosmos-list">
      <ul>
        <li>
          <span></span>Nature of Business<br>
          <span class="btm">Manufacturer</span>
        </li>
        <li>
          <span></span>Total Number of Employees<br>
          <span class="btm">26 to 50 People</span>
        </li>
        <li>
          <span></span>Year of Establishment<br>
          <span class="btm">2000</span>
        </li>
        <li>
          <span></span>Legal Status of Firm<br>
          <span class="btm">Limited Company (Ltd./Pvt.Ltd.)</span>
        </li>
        <li>
          <span></span>Annual Turnover<br>
          <span  class="btm">Rs. 2 - 5 Crore</span>
        </li>
        <li>
          <span class="blow etaSpt gstn"></span>GST No.<br>
          <span  class="btm">09AACCC5777D1ZK</span>
        </li>
      </ul>
    </div>
      <!-- Start Section -->
    <div class="row" id="data_align">
      <div class="col-lg-7">
        <p>Our company is manufacturing a good range of <a href="https://www.airoshotblast.net/main-product/41-Sand-Blasting-Machine" target="_blank">Sand Blasting Machine</a>, Shot Blasting Machine, <a href="https://www.sandblastingmachine.in/sand-blasting-cabinet/" target="_blank">Sand Blasting Cabinet</a>, 
        Blast Room, Dust Collector Unit, Industrial Blowers, etc, and supplier of pneumatically operated & wheel operated shot blasting machines which are at par fulfilling international quality standards. Except for standardized models, it manufactures custom-built machines as per consumer requirements. The products are thoroughly tested by the quality department & rigorous development is achieved by a professional design team in bringing new concepts. The company offers Cost-Effective, Genuine, and Unmatched Spares for all kind of Sand/Shot Blasting Machines. We also supply superior quality safety wears and we are the leading suppliers and exporters of premium quality Abrasives.</p>
      </div>
      <div class="col-lg-5">
        <div class="side-contant">
          <div class="m8 sw1">
            <img src="imgs/blast-room.jpg" ALT="" class="side-img-brdr" ></div>
            <div style="clear:both"></div>
          </div>
      </div>
      <div class="col-md-12">
          <p>Shot blasting machine is used for steel cleaning, paint removal, rust removal, steel flooring previous to paint or coating, and shot peening for steel fatigue lifestyles and utilizes solid-metallic shot or grit.</p>
        <h2>About Shot Blasting Machine:</h2>
        <p><a href="https://www.shotblastingmachines.in/airless-shot-blasting/" target="_blank">Airless shot blasting machine</a> is a cost-effective choice for lots blasting, cleansing and peening operations. The blast media is blasted via way of means of an excessive speed, motor pushed impeller wheel in place of a pneumatic system. When utilized inmixture with suitable abrasive restoration and dirtseries systems, airless blast machines can provide cost-powerfuloptions for some ofproduction and refurbishment applications.</p>
        <h3>Key Features of Shot Blasting Machine:</h3>
        <ul>
            <li>Solid and reliable construction.</li>
            <li>Adjustable feed of media & air pressure.</li>
            <li>Flexible loading & unloading performances.</li>
            <li>Perfectly finish metal parts and provide enhanced wear & fatigue properties.</li>
            <li>The wheel spinning depends upon the diffusive force to fix the cutting edges, needn't bother with any clamp mechanical apparatus.</li>
        </ul>
        <h2>Shot Blasting Machine Price and Types:</h2>
        <ul>
            <li>Door Mounted Hanger Shot Blasting Machine.</li>
            <li>Tumblast Type Airless Shot Blasting Machine</li>
            <li>Swing Table Airless Shot Blasting Machine</li>
            <li>Hanger Type Airless Shot Blasting Machine</li>
            <li>Y-Hanger Type Airless Shot Blasting Machine.</li>
            <li>Diabolo Type Automatic/Airless Shot Blasting Machine</li>
            <li>Plate Cleaning Automatic/Airless Shot Blasting Machine</li>
            <li>Pavers Block Airless Shot Blasting Machine</li>
            <li>Tunnel Type Airless Shot Blasting Machine</li>
            <li>Table Type Airless Shot Blasting MachineM</li>
            <li>Granite Slab Airless Shot Blasting MachineM</li>
        </ul>
        <h2>Best Shot Blasting Machine Manufacturer in India</h2>
        <p>Blast Rooms is a key manufacturer and global supplier of airless shot blasting machines, sand blasting machines, grit blasting machine, sand blasting cabinet, abrasive media and shot blasting hopper etc. that are designed & engineered to meet the demanding performance requirements. With innovative technologies and excellent technical assistance, we support your surface preparation and other allied needs. Also, we have a broad range of solutions to fit any application. </p>
        <p>The airless shot blasting machines offer cost-effective and very reliable methods for industries that use metal, including automotive, foundry, aerospace, construction, shipbuilding, and many more. The methods are used to clean, polish or strengthen metals. Keeping capacities, requirements and part size etc. in mind, we provide the right Shot Blasting & Peening Solution to industrial clients.</p>
        <p>Our company is reckoned among the leading manufacturers, exporters and suppliers of finest quality surface preparation equipment, such as Shot Peening Machines, Airless Shot Blasting Machines, etc. We cater to several industry verticals in India that primarily include Metal Forging plants, Foundries, Automotive industries, Defense organizations, Indian Railway, Ship building industries, Heavy engineering industries, Chemical and Petrochemical industries, etc.</p>
        <p>Our strong belief in the development path through exceptional airless shot blasting machines quality and services exhort us to establish durable business terms with our clients. Our team puts in its best efforts to deliver products nothing short of the best. Owing to this strong business approach, we have emerged as a top choice in Jodhpur district of Rajasthan. </p>
        
      </div>
    </div>  
    <!-- End Section -->
        <!--</section>-->
    <section class="row product-filter-section py-5 my-4" style="background: #f1f1f1;">
        <div class="container">
            <div class="section-title">
                <p class="text-center other-heading">BLOGS</p>
                <p class="py-4 text-center">Blast Rooms gives Quality services for us is one of the most important area and we believe that our relationship with customer totally deped on our capability to ensure delivery of good quality coating products.</p>
            </div>
            <div class="row">
                @foreach($blog as $list)
                    <div class="col-lg-3 col-6 col-sm-6 mb-1">
                        <div class="product-item">
                            <div class="pi-pic">
                                <div class="card">
                                    <a href="{{ url('blog/'. $list->slug)}}">
                                        @if($list->image!='')
        								<img src="{{url('imgs/blogs/'.$list->image)}}" alt="{{ $list->title }}" >
        								@else
        								<img class="" src="{{url('imgs/unavailable-image-300x225.jpg')}}" alt="{{ $list->title }}">
        								@endif
                                    </a>
                                    <div class="pi-text my-3" style="min-height:50px;">
                                        <a href="{{ url('blog/'. $list->slug)}}" style="padding:0">
                                            <p class="text-center font-weight-bold  blog-title">{{$list->title}}</p>
                                        </a>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

      <!-- Start Section -->
    <div class="tell-us-contant mt-5">
      <p class="tell-us-head">Tell Us What Are You Looking For ?</p>
      <form class="mx-3">
        
        <textarea class="form-control form-group" rows="4" cols="100" placeholder="Describe Your requirement in details :"></textarea>
        <input type="number" name="number" class="form-control form-group" placeholder="Enter Your Number">
        <input type="text" name="name" class="form-control form-group" placeholder="Enter Your Name">
        <button class="btn search-btn mb-3" style="margin: auto;">Send it Now</button>
      </form>
    </div>
    

 
@stop