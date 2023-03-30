@extends('layouts.layout')
@section('title', 'Roupas Nascimento')
@section('content')
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    
    <x-search/>

   <x-header/>

    <!-- Page Add Section Begin -->
    <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>{{$type->name}}<span>.</span></h2>
                        <a href="/">Home</a>
                        <a href="#">{{$type->name}}</a>
                        <a class="active" href="#">{{$part->name}}</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="{{Storage::url('img/add.jpg')}}" alt="add">
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Product Page Section Beign -->
    <section class="product-page">
        <div class="container">
            <div class="product-control">
                <a href="#">Previous</a>
                <a href="#">Next</a>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-slider owl-carousel">
                        <div class="product-img">
                            <figure>
                                <img src="{{Storage::url($part->path)}}" alt="{{$part->name}}">
                                <div class="p-status">new</div>
                            </figure>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-6">
                    <div class="product-content">
                        <h2>{{$part->name}}</h2>
                        <div class="pc-meta">
                            <h5>R$ {{$part->price}}</h5>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <p>{{$part->description}}</p>
                        <ul class="tags">
                            <li><span>Category :</span> Men’s Wear</li>
                            <li><span>Tipo :</span>{{$type->name}}</li>
                        </ul>
                        <div class="product-quantity">
                            <div class="pro-qty">
                                <input type="text" value="1">
                            </div>
                        </div>
                        <a href="#" class="primary-btn pc-btn">Consultar Item</a>
                        <ul class="p-info">
                            <li>Product Information</li>
                            <li>Reviews</li>
                            <li>Product Care</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Page Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Produtos Relacionados</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($relation as $key )
               
                <div class="col-lg-3 col-sm-6">
                    <div class="single-product-item">
                        <figure>
                            <a href="{{url('produto/'. $key->id)}}"><img src="{{Storage::url($key->path)}}" alt="{{$key->name}}"></a>
                            <div class="p-status">new</div>
                        </figure>
                        <div class="product-text">
                            <h6>{{$key->name}}</h6>
                            <p>R$ {{$key->price}}</p>
                        </div>
                    </div>
                </div>
                     
                @endforeach
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->

   <x-footer/>
</body>

</html>