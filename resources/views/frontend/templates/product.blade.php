<div class="container">
    <div class="section-title">
        @if(isset($name))
        <h2 class="text-center" style="text-transform: uppercase;">{{ $name->name  }}</h2>
        @else
        <h2 class="text-center" style="text-transform: uppercase;">PRODUCTS</h2>
        @endif
        <p class="pt-2 text-center my-5">Blast Rooms are offering a wide collection of Airless Shot Blasting Machines, Sandblasting machine, Thermal Spray Guns, Coating Wires, and Abrasive Blasting material to the clients in best quality.</p>
    </div>
    <div class="row">
        @foreach($product as $list)
        <div class="col-lg-3 col-6 mb-4">
            <div class="product-item">
                <div class="pi-pic">
                    <div class="card">
                        <a href="{{url('product/'.$list->slug) }}">
                            @if($list->image!='')
                            <img src="{{url('imgs/product/'.$list->image)}}" alt="{{ $list->title }}" width="251">
                            @else
                            <img class="" src="{{url('imgs/unavailable-image-300x225.jpg')}}" alt="{{ $list->title }}">
                            @endif
                        </a>
                        <div class="pi-text my-3" style="min-height:50px;">
                            <a href="{{ url('product/'.$list->slug) }}" style="padding:0">
                                <p class="text-center font-weight-bold">{{$list->title}}</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>