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
                        <h2>Pesquisa<span>.</span></h2>
                        <a href="/">Home</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="{{Storage::url('img/add.jpg')}}" alt="add">
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Categories Page Section Begin -->
    <section class="categories-page spad">
        <div class="container">
            <div class="categories-controls">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="categories-filter">
                            <div class="cf-left">
                                <form action="#">
                                    <select class="sort">
                                        <option value="">Sort by</option>
                                        <option value="">Orders</option>
                                        <option value="">Newest</option>
                                        <option value="">Price</option>
                                    </select>
                                </form>
                            </div>
                            <div class="cf-right">
                                <span>{{$total}} Produtos</span>
                                {{$result->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($result as $key)
                <div class="col-lg-3 col-md-6">
                    <div class="single-product-item">
                        <figure>
                            <img src="{{Storage::url($key->path)}}" alt="{{$key->name}}">
                            <div class="p-status popular">popular</div>
                            <div class="hover-icon">
                                <a href="{{url('produto/'. $key->id)}}" class="pop-up"><img src="{{Storage::url($key->path)}}"
                                        alt=""></a>
                            </div>
                        </figure>
                        <div class="product-text">
                            <a href="{{url('produto/'. $key->id)}}">
                                <h6>{{$key->name}}</h6>
                            </a>
                            <p>R$ {{$key->price}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="more-product">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <a href="#" class="primary-btn">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Page Section End -->

    <x-footer/>

</body>

</html>